<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Field
 *
 * @ORM\Table(name="field", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="layout_id", columns={"layout_id"})})
 * @ORM\Entity
 */
class Field
{
    /**
     * @var integer
     *
     * @ORM\Column(name="field_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=100, nullable=false)
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="field_status", type="string", length=100, nullable=false)
     */
    private $fieldStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="field_icon", type="string", length=255, nullable=false)
     */
    private $fieldIcon;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var \Layout
     *
     * @ORM\ManyToOne(targetEntity="Layout")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="layout_id", referencedColumnName="layout_id")
     * })
     */
    private $layout;



    /**
     * Get fieldId
     *
     * @return integer
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * Set fieldName
     *
     * @param string $fieldName
     *
     * @return Field
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set fieldStatus
     *
     * @param string $fieldStatus
     *
     * @return Field
     */
    public function setFieldStatus($fieldStatus)
    {
        $this->fieldStatus = $fieldStatus;

        return $this;
    }

    /**
     * Get fieldStatus
     *
     * @return string
     */
    public function getFieldStatus()
    {
        return $this->fieldStatus;
    }

    /**
     * Set fieldIcon
     *
     * @param string $fieldIcon
     *
     * @return Field
     */
    public function setFieldIcon($fieldIcon)
    {
        $this->fieldIcon = $fieldIcon;

        return $this;
    }

    /**
     * Get fieldIcon
     *
     * @return string
     */
    public function getFieldIcon()
    {
        return $this->fieldIcon;
    }

    /**
     * Set user
     *
     * @param \HomeBundle\Entity\User $user
     *
     * @return Field
     */
    public function setUser(\HomeBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \HomeBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set layout
     *
     * @param \HomeBundle\Entity\Layout $layout
     *
     * @return Field
     */
    public function setLayout(\HomeBundle\Entity\Layout $layout = null)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get layout
     *
     * @return \HomeBundle\Entity\Layout
     */
    public function getLayout()
    {
        return $this->layout;
    }
}
