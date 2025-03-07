document.addEventListener('DOMContentLoaded', function() {
    // Get all dropdown items
    const dropdownItems = document.querySelectorAll('.navbar .nav-item.dropdown');
    
    // Variable to store timeout IDs
    let timeoutIds = {};
    
    // Add hover event listeners to each dropdown
    dropdownItems.forEach(function(item, index) {
        // Show dropdown on mouseenter
        item.addEventListener('mouseenter', function() {
            // Clear any existing timeout for this item
            if (timeoutIds[index]) {
                clearTimeout(timeoutIds[index]);
                delete timeoutIds[index];
            }
            
            const dropdownMenu = this.querySelector('.dropdown-menu');
            const dropdownIcon = this.querySelector('.bi-chevron-down');
            
            if (dropdownMenu) {
                dropdownMenu.classList.add('show');
                this.classList.add('show');
                if (dropdownIcon) {
                    dropdownIcon.style.transform = 'rotate(180deg)';
                }
            }
        });
        
        // Hide dropdown on mouseleave with delay
        item.addEventListener('mouseleave', function() {
            const dropdownMenu = this.querySelector('.dropdown-menu');
            const dropdownIcon = this.querySelector('.bi-chevron-down');
            const itemIndex = index;
            const self = this;
            
            // Set a timeout to hide the dropdown
            timeoutIds[itemIndex] = setTimeout(function() {
                if (dropdownMenu) {
                    dropdownMenu.classList.remove('show');
                    self.classList.remove('show');
                    if (dropdownIcon) {
                        dropdownIcon.style.transform = 'rotate(0deg)';
                    }
                }
                delete timeoutIds[itemIndex];
            }, 200); // 200ms delay before hiding
        });
        
        // Add event listeners to dropdown menu to handle mouse entering/leaving the submenu
        const dropdownMenu = item.querySelector('.dropdown-menu');
        if (dropdownMenu) {
            dropdownMenu.addEventListener('mouseenter', function() {
                // Clear timeout if mouse enters the dropdown menu
                if (timeoutIds[index]) {
                    clearTimeout(timeoutIds[index]);
                    delete timeoutIds[index];
                }
            });
            
            dropdownMenu.addEventListener('mouseleave', function() {
                const dropdownIcon = item.querySelector('.bi-chevron-down');
                const itemIndex = index;
                
                // Set timeout to hide the dropdown
                timeoutIds[itemIndex] = setTimeout(function() {
                    dropdownMenu.classList.remove('show');
                    item.classList.remove('show');
                    if (dropdownIcon) {
                        dropdownIcon.style.transform = 'rotate(0deg)';
                    }
                    delete timeoutIds[itemIndex];
                }, 200);
            });
        }
        
        // Prevent default behavior of dropdown toggle
        const dropdownToggle = item.querySelector('.nav-link');
        if (dropdownToggle) {
            dropdownToggle.addEventListener('click', function(e) {
                // Don't prevent default - allow the link to work normally
                // This allows direct navigation to the products page
                
                // But stop propagation to prevent Bootstrap's dropdown from toggling
                e.stopPropagation();
            });
        }
    });
});