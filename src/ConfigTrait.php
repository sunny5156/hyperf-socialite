<?php

namespace Cblink\Hyperf\Socialite;

use Hyperf\Utils\Arr;

trait ConfigTrait
{
    /**
     * @var array
     */
    protected array $config;


    /**
     * @param array $config
     * @return $this
     */
    public function setConfig(array $config = [])
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @param $key
     * @param null $default
     * @return array|\ArrayAccess|mixed
     */
    protected function getConfig($key, $default = null)
    {
        return Arr::get($this->config, $key, $default);
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    protected function getClientId()
    {
        return $this->getConfig('client_id');
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    protected function getClientSecret()
    {
        return $this->getConfig('client_secret');
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    protected function getRedirectUrl()
    {
        return $this->getConfig('redirect_url');
    }

}