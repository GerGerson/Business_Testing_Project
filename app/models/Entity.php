<?php

class Entity extends Eloquent {
    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt() {
        return $this->{$this->getCreatedAtColumn()};
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt() {
        return $this->{$this->getUpdatedAtColumn()};
    }
}