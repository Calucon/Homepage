<?php

class Util
{
    const TEMPLATE_DIR = __DIR__ . '/../template';
    const POST_DIR = __DIR__ . '/../posts';

    private function __construct()
    {
    }

    /**
     * Attempts to load a template by the given name.
     * Variables can be passted to it using $vvars.
     * 
     * It's recommended to use a named array to easily access
     * your variables!
     * 
     * @param string $name name of the template
     * @param array $vvars variables passed to the template
     */
    public static function loadTemplate(string $name, array $vvars = [])
    {
        if (!str_ends_with($name, '.php')) $name .= '.php';

        require(self::TEMPLATE_DIR . '/' . $name);
    }

    /**
     * Attempts to load a post by the given name.
     * Variables can be passted to it using $vvars.
     * 
     * It's recommended to use a named array to easily access
     * your variables!
     * 
     * @param Post $post post to load
     * @param array $vvars variables passed to the post
     */
    public static function loadPost(Post $post, array $vvars = [])
    {
        if ($post->disabled) return;

        $vvars['post'] = $post;
        self::loadTemplate('post.php', $vvars);
    }

    /**
     * Attempts to load post content by the given name.
     * Variables can be passted to it using $vvars.
     * 
     * It's recommended to use a named array to easily access
     * your variables!
     * 
     * @param Post $post post to load
     * @param array $vvars variables passed to the post content
     */
    public static function loadPostContent(Post $post, array $vvars = [])
    {
        $name = $post->contentView;
        if (!str_ends_with($name, '.php')) $name .= '.php';

        try {
            ob_start();
            require(self::POST_DIR . '/' . $name);
            echo ob_get_clean();
        } catch (Exception | Error $_) {
            ob_clean();
            self::loadTemplate('error_load_post');
        }
    }
}
