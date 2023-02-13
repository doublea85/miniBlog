<?php
declare(strict_types=1);

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

Trait Timestapable
{
    /**
     * @var  \DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private  $createdAt;
    

    /**
     * @var  \DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private  $updatedAt;


    public function getCreatedAt() : \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt() : ?\DateTimeInterface
    {
        return $this->getUpdatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt) : Timestapable
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
