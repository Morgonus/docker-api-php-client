<?php

namespace Docker\API\Model;

class TaskSpecContainerSpecPrivileges
{
    /**
     * CredentialSpec for managed service account (Windows only)
     *
     * @var TaskSpecContainerSpecPrivilegesCredentialSpec|null
     */
    protected $credentialSpec;
    /**
     * SELinux labels of the container
     *
     * @var TaskSpecContainerSpecPrivilegesSELinuxContext|null
     */
    protected $sELinuxContext;
    /**
     * CredentialSpec for managed service account (Windows only)
     *
     * @return TaskSpecContainerSpecPrivilegesCredentialSpec|null
     */
    public function getCredentialSpec() : ?TaskSpecContainerSpecPrivilegesCredentialSpec
    {
        return $this->credentialSpec;
    }
    /**
     * CredentialSpec for managed service account (Windows only)
     *
     * @param TaskSpecContainerSpecPrivilegesCredentialSpec|null $credentialSpec
     *
     * @return self
     */
    public function setCredentialSpec(?TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec) : self
    {
        $this->credentialSpec = $credentialSpec;
        return $this;
    }
    /**
     * SELinux labels of the container
     *
     * @return TaskSpecContainerSpecPrivilegesSELinuxContext|null
     */
    public function getSELinuxContext() : ?TaskSpecContainerSpecPrivilegesSELinuxContext
    {
        return $this->sELinuxContext;
    }
    /**
     * SELinux labels of the container
     *
     * @param TaskSpecContainerSpecPrivilegesSELinuxContext|null $sELinuxContext
     *
     * @return self
     */
    public function setSELinuxContext(?TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext) : self
    {
        $this->sELinuxContext = $sELinuxContext;
        return $this;
    }
}