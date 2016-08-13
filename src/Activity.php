<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Activity
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the activity
     * @var string
     */
    protected $id;

    /**
     * Title of the activity
     * @var string
     */
    protected $title;

    /**
     * Content of the activity
     * @var string
     */
    protected $content;

    /**
     * Level of the activity
     * @var integer
     */
    protected $level;

    /**
     * Date at which the transaction was created
     * @var string
     */
    protected $createdAt;

    /**
     * Activity constructor
     * @param ProcessOut\ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
        {
            $processOut = ProcessOut::getDefault();
        }

        $this->instance = $processOut;

        
    }

    
    /**
     * Get Id
     * ID of the activity
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the activity
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Title
     * Title of the activity
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set Title
     * Title of the activity
     * @param  string $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->title = $value;
        return $this;
    }
    
    /**
     * Get Content
     * Content of the activity
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set Content
     * Content of the activity
     * @param  string $value
     * @return $this
     */
    public function setContent($value)
    {
        $this->content = $value;
        return $this;
    }
    
    /**
     * Get Level
     * Level of the activity
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set Level
     * Level of the activity
     * @param  int $value
     * @return $this
     */
    public function setLevel($value)
    {
        $this->level = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the transaction was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the transaction was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Activity
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["title"]))
            $this->setTitle($data["title"]);

        if(! empty($data["content"]))
            $this->setContent($data["content"]);

        if(! empty($data["level"]))
            $this->setLevel($data["level"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Get all the project activities.
     * @param array $options
     * @return array
     */
    public static function all($options = array())
    {
        $cur = new Activity();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/activities";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['activities'] as $v)
        {
            $tmp = new Activity($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Find a specific activity and fetch its data.
	 * @param string $activityId
     * @param array $options
     * @return $this
     */
    public static function find($activityId, $options = array())
    {
        $cur = new Activity();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/activities/" . urlencode($activityId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['activity'];
        return $cur->fillWithData($body);
        
    }

    
}
