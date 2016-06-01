<?php
namespace ScrumBoardItBundle\Entity\Issue;

/**
 * Description of AbstractIssue
 *
 * @author Johan Rouve <johan.rouve@gmail.com>
 */
class AbstractIssue implements IssueInterface, \JsonSerializable
{
    /**
     * Type
     * @var string
     */
    private $type;

    /**
     * Link
     * @var string
     */
    private $link;

    /**
     * Printed
     * @var boolean
     */
    private $printed;

    /**
     * User Story
     * @var boolean
     */
    private $userStory;

    /**
     * Proof of Concept
     * @var boolean
     */
    private $proofOfConcept;

    /**
     * Project
     * @var string
     */
    private $project;

    /**
     * ID
     * @var number
     */
    private $id;

    /**
     * Number
     * @var number
     */
    private $number;

    /**
     * Title
     * @var string
     */
    private $title;

    /**
     * Complexity
     * @var number
     */
    private $complexity;

    /**
     * Business Value
     * @var number
     */
    private $businessValue;

    /**
     * Description
     * @var string
     */
    private $description;

    /**
     * Time Box
     * @var string
     */
    private $timeBox;

    /**
     * Type getter
     *
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type setter
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        
        return $this;
    }

    /**
     * Link getter
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Link setter
     * @param string $link
     * @return self
     */
    public function setLink($link)
    {
        $this->link = $link;
        
        return $this;
    }

    /**
     * Printed getter
     *
     * @return boolean
     */
    public function isPrinted()
    {
        return $this->printed;
    }

    /**
     * Printed setter
     * @param unknown $printed
     * @return self
     */
    public function setPrinted($printed)
    {
        $this->printed = $printed;
        
        return $this;
    }

    /**
     * User Story getter
     *
     * @return boolean
     */
    public function isUserStory()
    {
        return $this->userStory;
    }

    /**
     * User Story setter
     * @param unknown $value
     * @return self
     */
    public function setUserStory($value)
    {
        $this->userStory = $value;
        
        return $this;
    }

    /**
     * Proof of Concept getter
     *
     * @return boolean
     */
    public function isProofOfConcept()
    {
        return $this->proofOfConcept;
    }

    /**
     * Proof of Concept setter
     * @param boolean $proofOfConcept
     * @return self
     */
    public function setProofOfConcept($proofOfConcept)
    {
        $this->proofOfConcept = $proofOfConcept;
        
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * {@inheritDoc}
     */
    public function setProject($project)
    {
        $this->project = $project;
        
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Number getter
     *
     * @return number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Number setter
     * @param number $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getComplexity()
    {
        return $this->complexity;
    }

    /**
     * {@inheritDoc}
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;
        
        return $this;
    }

    /**
     * Business Value getter
     *
     * @return number
     */
    public function getBusinessValue()
    {
        return $this->businessValue;
    }

    /**
     * Business Value Setter
     * @param number $value
     * @return self
     */
    public function setBusinessValue($value)
    {
        $this->businessValue = $value;
        
        return $this;
    }

    /**
     * Description getter
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description setter
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }

    /**
     * Time Box getter
     * @return string
     */
    public function getTimeBox()
    {
        return $this->timeBox;
    }

    /**
     * Time Box setter
     * @param string $timeBox
     * @return self
     */
    public function setTimeBox($timeBox)
    {
        $this->timeBox = $timeBox;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return array(
            'type' => $this->getType(),
            'link' => $this->getLink(),
            'printed' => $this->isPrinted(),
            'user_story' => $this->isUserStory(),
            'proof_of_concept' => $this->isProofOfConcept(),
            'project' => $this->getProject(),
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'complexity' => $this->getComplexity(),
            'business_Value' => $this->getBusinessValue(),
            'description' => $this->getDescription(),
            'time_box' => $this->getTimeBox()
        );
    }
}