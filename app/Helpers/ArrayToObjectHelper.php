<?php

if (!function_exists('array_to_object')) {
    /**
     * Recursively convert an array to an object.
     *
     * @param mixed $data
     * @return mixed
     */
    function array_to_object($data): mixed
    {
        if (is_array($data)) {
            return (object) array_map('array_to_object', $data);
        } elseif (is_object($data)) {
            foreach ($data as $key => $value) {
                $data->$key = array_to_object($value);
            }
        }

        return $data;
    }
}
