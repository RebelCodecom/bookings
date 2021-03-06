<?php

namespace RebelCode\Bookings\Framework\Storage;

use RebelCode\Bookings\Framework\Model\ModelInterface;

/**
 * A resource model is responsible for handling.
 *
 * @since [*next-version*]
 */
interface ResourceModelInterface extends ModelInterface
{
    /**
     * Saves the model to storage.
     *
     * @since [*next-version*]
     *
     * @param ModelInterface $model The model instance.
     */
    public function save(ModelInterface $model);

    /**
     * Loads the model from storage.
     *
     * @since [*next-version*]
     *
     * @param ModelInterface $model The model instance.
     */
    public function load(ModelInterface $model);

    /**
     * Deletes the model from storage.
     *
     * @since [*next-version*]
     *
     * @param ModelInterface $model The model instance.
     */
    public function delete(ModelInterface $model);
}
