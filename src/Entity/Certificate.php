<?php
namespace App\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity()
 * @ORM\Table()
 * @Vich\Uploadable()
 */
class Certificate
{

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     * @var DateTime
     */
    protected $startAt;
    /**
     * @ORM\Column(type="date")
     * @var DateTime
     */
    protected $endAt;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $content;

    /**
     * @Vich\UploadableField(mapping="certificates", fileNameProperty="content")
     * @var File
     */
    protected $file;

    public function getId()
    {
        return $this->id;
    }

    public function getStartAt(): ?DateTime
    {
        return $this->startAt;
    }

    public function getEndAt(): ?DateTime
    {
        return $this->endAt;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setStartAt(DateTime $startAt)
    {
        $this->startAt = $startAt;
    }

    public function setEndAt(DateTime $endAt)
    {
        $this->endAt = $endAt;
    }

    public function setFile(File $file)
    {
        $this->file = $file;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}