<?php namespace Fourum\Storage\Forum;

/**
 * Interface for interacting with a Forum
 */
interface ForumInterface
{
    /**
     * Get the Type of the Forum.
     *
     * @return Fourum\Models\Forum\Type
     */
    public function type();

    /**
     * @return NodeInterface
     */
    public function getNode();

    /**
     * @return boolean
     */
    public function isCategory();

    /**
     * @return boolean
     */
    public function isForum();
}
