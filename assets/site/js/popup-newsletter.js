/**
 * Newsletter Exit Intent Popup
 * Sistema moderno de captação de e-mail com detecção de exit-intent
 */

class NewsletterPopup {
    constructor() {
        this.isShown = false;
        this.isSubscribed = false;
        this.mouseLeaveTrigger = false;
        this.scrollTrigger = false;
        this.timeTrigger = false;
        
        // Configurações
        this.config = {
            exitIntentEnabled: true,
            scrollPercentage: 70, // % da página para mostrar popup
            timeDelay: 30000, // 30 segundos
            cookieExpireDays: 0.25, // 6 horas para não mostrar novamente (0.25 = 6 horas)
            mobileExitDelay: 5000, // 5 segundos no mobile para mostrar
        };
        
        this.init();
    }
    
    getBasePath() {
        // Primeiro, tentar usar APP_CONFIG se disponível
        if (window.APP_CONFIG && window.APP_CONFIG.basePath) {
            return window.APP_CONFIG.basePath;
        }
        
        // Fallback: detectar basePath da URL atual
        const currentPath = window.location.pathname;
        console.log('Detectando basePath da URL:', currentPath);
        
        // Se a URL contém /mareplast/, usar /mareplast como basePath
        if (currentPath.includes('/mareplast/')) {
            return '/mareplast';
        }
        
        // Se não, assumir que não há basePath (produção)
        return '';
    }
    
    init() {
        // Debug: verificar APP_CONFIG
        console.log('=== DEBUG NEWSLETTER ===');
        console.log('window.APP_CONFIG:', window.APP_CONFIG);
        console.log('typeof APP_CONFIG:', typeof window.APP_CONFIG);
        if (window.APP_CONFIG) {
            console.log('APP_CONFIG.basePath:', window.APP_CONFIG.basePath);
            console.log('typeof basePath:', typeof window.APP_CONFIG.basePath);
            console.log('basePath length:', window.APP_CONFIG.basePath ? window.APP_CONFIG.basePath.length : 'null');
        }
        console.log('window.location.pathname:', window.location.pathname);
        console.log('window.location.href:', window.location.href);
        console.log('getBasePath():', this.getBasePath());
        console.log('========================');
        
        // Verificar se já foi cadastrado (permanente) ou se foi mostrado recentemente
        if (this.getCookie('newsletter_subscribed')) {
            return;
        }
        
        this.createPopupHTML().then(() => {
            this.bindEvents();
            this.setupTriggers();
        }).catch((error) => {
            console.error('Erro ao carregar popup newsletter:', error);
        });
    }
    
    async createPopupHTML() {
        try {
            // Usar método getBasePath() para obter basePath correto
            const basePath = this.getBasePath();
            const url = basePath + '/newsletter/popup-html';
            console.log('Newsletter popup: Tentando URL:', url, 'basePath:', basePath);
            
            const response = await fetch(url);
            
            if (!response.ok) {
                throw new Error('Erro ao carregar popup HTML - Status: ' + response.status);
            }
            
            const popupHTML = await response.text();
            document.body.insertAdjacentHTML('beforeend', popupHTML);
            
        } catch (error) {
            console.error('Erro ao carregar popup newsletter:', error);
            throw error;
        }
    }
    
    bindEvents() {
        // Fechar popup
        document.getElementById('newsletter-close-btn').addEventListener('click', () => {
            this.closePopup();
        });
        
        // Fechar clicando no overlay
        document.getElementById('newsletter-popup-overlay').addEventListener('click', (e) => {
            if (e.target.id === 'newsletter-popup-overlay') {
                this.closePopup();
            }
        });
        
        // Fechar com ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.isShown) {
                this.closePopup();
            }
        });
        
        // Máscara de telefone
        const telefoneField = document.getElementById('newsletter-telefone');
        if (telefoneField) {
            telefoneField.addEventListener('input', (e) => {
                this.applyPhoneMask(e.target);
            });
        }
        
        // Envio do formulário
        document.getElementById('newsletter-form').addEventListener('submit', (e) => {
            e.preventDefault();
            this.submitForm();
        });
        
        // Tracking do WhatsApp
        document.getElementById('newsletter-whatsapp-btn').addEventListener('click', () => {
            this.trackWhatsAppClick();
            setTimeout(() => this.closePopup(true), 500);
        });
    }
    
    setupTriggers() {
        // Exit Intent (desktop)
        if (this.config.exitIntentEnabled && !this.isMobile()) {
            let exitIntentTriggered = false;
            
            document.addEventListener('mouseleave', (e) => {
                if (e.clientY < 0 && !exitIntentTriggered && !this.isShown) {
                    exitIntentTriggered = true;
                    setTimeout(() => this.showPopup('exit_intent'), 200);
                }
            });
        }
        
        // Scroll Trigger
        let scrollTriggered = false;
        window.addEventListener('scroll', () => {
            if (!scrollTriggered && !this.isShown) {
                const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
                
                if (scrollPercent >= this.config.scrollPercentage) {
                    scrollTriggered = true;
                    setTimeout(() => this.showPopup('scroll_trigger'), 1000);
                }
            }
        });
        
        // Time Trigger
        if (this.isMobile()) {
            // No mobile, usar timer
            setTimeout(() => {
                if (!this.isShown) {
                    this.showPopup('time_trigger_mobile');
                }
            }, this.config.mobileExitDelay);
        } else {
            // No desktop, timer mais longo
            setTimeout(() => {
                if (!this.isShown) {
                    this.showPopup('time_trigger_desktop');
                }
            }, this.config.timeDelay);
        }
    }
    
    showPopup(trigger = 'unknown') {
        if (this.isShown || this.getCookie('newsletter_subscribed')) {
            return;
        }
        
        // Verificar se foi mostrado recentemente (6 horas)
        if (this.getCookie('newsletter_popup_shown')) {
            return;
        }
        
        this.isShown = true;
        const overlay = document.getElementById('newsletter-popup-overlay');
        
        if (!overlay) {
            return;
        }
        
        // Adicionar classe ao body para efeito de blur
        document.body.classList.add('newsletter-popup-active');
        
        // Mostrar popup com animação
        overlay.classList.add('show', 'animate-in');
        
        // Focar no campo de email após animação
        setTimeout(() => {
            const emailField = document.getElementById('newsletter-email');
            if (emailField) {
                emailField.focus();
            }
        }, 400);
        
        // Tracking
        this.trackPopupShow(trigger);
        
        // Salvar cookie para não mostrar novamente por 6 horas
        this.setCookie('newsletter_popup_shown', 'true', this.config.cookieExpireDays);
    }
    
    closePopup(userAction = false) {
        if (!this.isShown) return;
        
        const overlay = document.getElementById('newsletter-popup-overlay');
        
        // Remover classe do body
        document.body.classList.remove('newsletter-popup-active');
        
        // Esconder popup
        overlay.classList.remove('show');
        
        this.isShown = false;
        
        // Se fechou após ação (WhatsApp ou cadastro), marcar como resolvido
        if (userAction) {
            this.setCookie('newsletter_popup_resolved', 'true', this.config.cookieExpireDays);
        }
        
        // Tracking
        this.trackPopupClose(userAction);
    }
    
    async submitForm() {
        const form = document.getElementById('newsletter-form');
        const formContainer = document.getElementById('newsletter-form-container');
        const loadingDiv = document.getElementById('newsletter-loading');
        const messagesDiv = document.getElementById('newsletter-messages');
        
        // Dados do formulário
        const formData = new FormData(form);
        const data = {
            nome: formData.get('nome'),
            email: formData.get('email'),
            telefone: formData.get('telefone')
        };
        
        // Validação básica
        if (!data.email || !this.isValidEmail(data.email)) {
            this.showMessage('Por favor, insira um e-mail válido.', 'error');
            return;
        }
        
        // Mostrar loading
        form.classList.add('loading');
        formContainer.style.display = 'none';
        loadingDiv.style.display = 'block';
        
        try {
            // Usar método getBasePath() para obter basePath correto
            const basePath = this.getBasePath();
            const url = basePath + '/newsletter/subscribe';
            console.log('Newsletter submit: Tentando URL:', url, 'basePath:', basePath);
            
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams(data)
            });
            
            const result = await response.json();
            
            // Esconder loading
            form.classList.remove('loading');
            loadingDiv.style.display = 'none';
            formContainer.style.display = 'block';
            
            if (result.success) {
                this.showMessage(result.message, 'success');
                this.setCookie('newsletter_subscribed', 'true', this.config.cookieExpireDays);
                this.trackSuccessfulSubscription(data.email);
                
                // Fechar popup após 3 segundos
                setTimeout(() => this.closePopup(true), 3000);
                
            } else {
                this.showMessage(result.message, 'error');
            }
            
        } catch (error) {
            console.error('Erro ao cadastrar newsletter:', error);
            
            // Esconder loading
            form.classList.remove('loading');
            loadingDiv.style.display = 'none';
            formContainer.style.display = 'block';
            
            this.showMessage('Erro ao processar sua solicitação. Tente novamente.', 'error');
        }
    }
    
    showMessage(message, type) {
        const messagesDiv = document.getElementById('newsletter-messages');
        const messageClass = type === 'success' ? 'newsletter-success-message' : 'newsletter-error-message';
        
        messagesDiv.innerHTML = `<div class="${messageClass}">${message}</div>`;
        
        // Auto-remove mensagem de erro após 5 segundos
        if (type === 'error') {
            setTimeout(() => {
                messagesDiv.innerHTML = '';
            }, 5000);
        }
    }
    
    // Utility methods
    isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    isMobile() {
        return window.innerWidth <= 768 || /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }
    
    setCookie(name, value, days) {
        const expires = new Date();
        expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
    }
    
    getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
    
    // Tracking methods (para analytics)
    trackPopupShow(trigger) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'newsletter_popup_show', {
                'trigger': trigger,
                'event_category': 'newsletter',
                'event_label': trigger
            });
        }
    }
    
    trackPopupClose(userAction) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'newsletter_popup_close', {
                'user_action': userAction,
                'event_category': 'newsletter',
                'event_label': userAction ? 'user_action' : 'dismiss'
            });
        }
    }
    
    trackSuccessfulSubscription(email) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'newsletter_subscribe', {
                'event_category': 'newsletter',
                'event_label': 'success',
                'value': 1
            });
        }
    }
    
    trackWhatsAppClick() {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'whatsapp_click_popup', {
                'event_category': 'contact',
                'event_label': 'newsletter_popup'
            });
        }
    }

    applyPhoneMask(field) {
        let value = field.value.replace(/\D/g, ''); // Remove tudo que não é dígito
        
        if (value.length === 0) {
            field.value = '';
            return;
        }
        
        // Aplicar máscara baseada no tamanho
        if (value.length <= 10) {
            // Telefone fixo: (11) 1234-5678
            value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
        } else {
            // Celular: (11) 12345-6789
            value = value.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, '($1) $2-$3');
        }
        
        field.value = value;
    }
}

// Inicializar quando DOM estiver pronto
document.addEventListener('DOMContentLoaded', function() {
    // Aguardar um pouco para garantir que a página carregou completamente
    setTimeout(() => {
        window.newsletterPopup = new NewsletterPopup();
    }, 1000);
});

// Função global para fechar popup (se necessário)
window.closeNewsletterPopup = function() {
    if (window.newsletterPopup) {
        window.newsletterPopup.closePopup(true);
    }
}; 