<?php

namespace App\Controllers;
use App\Models\Tag;
use Respect\Validation\Validator as v;

class TagsController extends Controller
{
    const currentPage = 'tags';    
    const currentTitle = 'Tags';    

    public function edit($request, $response)
    {
        // Get the tag with ID 1 (as specified in the requirements)
        $tag = Tag::find(1);

        // If tag doesn't exist, create it
        if (!$tag) {
            $tag = Tag::create([
                'tag_pixel' => '',
                'tag_google' => ''
            ]);
        }

        if ($request->getMethod() === 'POST') {
            $post = $request->getParsedBody();
            
            // Update the tag
            $tag->update([
                'tag_pixel' => $post['tag_pixel'] ?? '',
                'tag_google' => $post['tag_google'] ?? ''
            ]);

            $this->container->get('flash')->addMessage('success', 'Tags atualizadas com sucesso');
            return $this->redirect($request, $response, 'app.tags');
        }
        
        $data = [
            'page' => self::currentPage,
            'title' => self::currentTitle,
            'tag' => $tag,
            'configs' => $this->configs
        ];

        return $this->container->get('view')->render($response, 'admin/tags.twig', $data);
    }
}