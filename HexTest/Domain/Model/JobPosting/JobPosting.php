<?php

namespace HexTest\Domain\Model\User;

use Assert\Assertion;
//use Ddd\Domain\DomainEventPublisher;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use HexTest\Domain\Model\JobPosting\JobPostingId;

//use Lw\Domain\Model\Wish\Wish;
//use Lw\Domain\Model\Wish\WishId;

class JobPosting
{
    const MAX_LENGTH_TITLE = 255;
    const MAX_LENGTH_PASSWORD = 255;
    const MAX_WISHES = 3;

    /**
     * @var JobPostingId
     */
    protected $jobPostingId;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $createdOn;

    /**
     * @var \DateTime
     */
    protected $updatedOn;

//    /**
//     * @var ArrayCollection
//     */
//    protected $wishes;

    /**
     * @param JobPostingId $jobpostingId
     * @param string $title
     * @param string $description
     */
    public function __construct(JobPostingId $jobpostingId, $title, $description)
    {
        $this->jobPostingId = $jobpostingId;
        $this->setTitle($title);
        $this->changeDescription($description);
        $this->createdOn = new \DateTime();
        $this->updatedOn = new \DateTime();
//        $this->wishes = new ArrayCollection();

//        DomainEventPublisher::instance()->publish(
//            new UserRegistered(
//                $this->userId
//            )
//        );
    }

    /**
     * @param $title
     */
    protected function setTitle($title)
    {
        $title = trim($title);
        if (!$title) {
            throw new \InvalidArgumentException('title');
        }

        Assertion::email($title);
        $this->title = strtolower($title);
    }

    /**
     * @param string $description
     */
    public function changeDescription($description)
    {
        $description = trim($description);
        if (!$description) {
            throw new \InvalidArgumentException('password');
        }

        $this->description = $description;
    }

    /**
     * @return JobPostingId
     */
    public function id()
    {
        return $this->jobPostingId;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

//    public function makeWishNoAggregateVersion(WishId $wishId, $address, $content)
//    {
//        return new Wish(
//            $wishId,
//            $this->id(),
//            $address,
//            $content
//        );
//    }
//
//    public function makeWishAggregateVersion($address, $content)
//    {
//        if (count($this->wishes) >= self::MAX_WISHES) {
//            throw new NoMoreWishesAllowedException();
//        }
//
//        $this->wishes[] = new Wish(
//            new WishId(),
//            $this->id(),
//            $address,
//            $content
//        );
//    }
//
//    public function numberOfRemainingWishes()
//    {
//        return self::MAX_WISHES - count($this->wishes);
//    }
//
//    public function grantWishes()
//    {
//        $wishesGranted = 0;
//        foreach ($this->wishes as $wish) {
//            $wish->grant();
//            ++$wishesGranted;
//        }
//
//        return $wishesGranted;
//    }
//
//    public function updateWish(WishId $wishId, $address, $content)
//    {
//        foreach ($this->wishes as $k => $wish) {
//            if ($wish->id()->equals($wishId)) {
//                $wish->changeContent($content);
//                $wish->changeAddress($address);
//                break;
//            }
//        }
//    }
//
//    public function deleteWish(WishId $wishId)
//    {
//        // $wishes = $this->wishes->matching(Criteria::create()->where(Criteria::expr()->eq('id', $wishId)));
//        // foreach ($wishes as $wish) {
//        //    $this->wishes->removeElement($wish);
//        // }
//
//        foreach ($this->wishes as $k => $wish) {
//            if ($wish->id()->equals($wishId)) {
//                unset($this->wishes[$k]);
//                break;
//            }
//        }
//    }
}
