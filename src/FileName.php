<?php declare(strict_types = 1);
namespace TheSeer\Templado;

class FileName {

    /**
     * @var string
     */
    private $path;

    /**
     * FileName constructor.
     *
     * @param $path
     */
    public function __construct(string $path) {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function asString(): string {
        return $this->path;
    }

    /**
     * @return bool
     */
    public function exists(): bool {
        return file_exists($this->path);
    }

    /**
     * @return bool
     */
    public function isFile(): bool {
        return is_file(realpath($this->path));
    }

    /**
     * @return bool
     */
    public function isReadable(): bool {
        return is_readable($this->path);
    }

}
