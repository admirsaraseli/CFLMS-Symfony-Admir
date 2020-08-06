<?php

namespace App\Entity;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="userEmail", columns={"userEmail"})})
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=30, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="userEmail", type="string", length=60, nullable=false)
     */
    private $useremail;

    /**
     * @var string
     *
     * @ORM\Column(name="userPass", type="string", length=255, nullable=false)
     */
    private $userpass;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=200, nullable=false, options={"default"="user"})
     */
    private $status = 'user';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=200, nullable=false)
     */
    private $img;

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getUseremail(): ?string
    {
        return $this->useremail;
    }

    public function setUseremail(string $useremail): self
    {
        $this->useremail = $useremail;

        return $this;
    }

    public function getUserpass(): ?string
    {
        return $this->userpass;
    }

    public function setUserpass(string $userpass): self
    {
        $this->userpass = $userpass;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }


}
