<?php

class SessionSaver extends File implements FileInterface
{
    public function save(array $data): object
    {
        $_SESSION[$this->fileName] = $data;
        return $this;
    }

    public function load(): array
    {
        return (array) $_SESSION[$this->fileName];
    }
}
