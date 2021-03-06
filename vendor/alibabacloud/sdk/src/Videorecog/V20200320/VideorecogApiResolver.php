<?php

namespace AlibabaCloud\Videorecog\V20200320;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DetectVideoShot detectVideoShot(array $options = [])
 * @method GenerateVideoCover generateVideoCover(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 */
class VideorecogApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'videorecog';

    /** @var string */
    public $version = '2020-03-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'videorecog';
}

/**
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class DetectVideoShot extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getIsGif()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class GenerateVideoCover extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsGif($value)
    {
        $this->data['IsGif'] = $value;
        $this->options['form_params']['IsGif'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getJobId()
 */
class GetAsyncJobResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }
}
