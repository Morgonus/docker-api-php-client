<?php

namespace Docker\API;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
    * Returns a list of containers. For details on the format, see [the inspect endpoint](#operation/ContainerInspect).
    
    Note that it uses a different, smaller representation of a container than inspecting a single container. For example,
    the list of linked containers is not propagated .
    
    *
    * @param array $queryParameters {
    *     @var bool $all Return all containers. By default, only running containers are shown
    *     @var int $limit Return this number of most recently created containers, including non-running ones.
    *     @var bool $size Return the size of container as fields `SizeRw` and `SizeRootFs`.
    *     @var string $filters Filters to process on the container list, encoded as JSON (a `map[string][]string`). For example, `{"status": ["paused"]}` will only return paused containers. Available filters:
    
    - `ancestor`=(`<image-name>[:<tag>]`, `<image id>`, or `<image@digest>`)
    - `before`=(`<container id>` or `<container name>`)
    - `expose`=(`<port>[/<proto>]`|`<startport-endport>/[<proto>]`)
    - `exited=<int>` containers with exit code of `<int>`
    - `health`=(`starting`|`healthy`|`unhealthy`|`none`)
    - `id=<ID>` a container's ID
    - `isolation=`(`default`|`process`|`hyperv`) (Windows daemon only)
    - `is-task=`(`true`|`false`)
    - `label=key` or `label="key=value"` of a container label
    - `name=<name>` a container's name
    - `network`=(`<network id>` or `<network name>`)
    - `publish`=(`<port>[/<proto>]`|`<startport-endport>/[<proto>]`)
    - `since`=(`<container id>` or `<container name>`)
    - `status=`(`created`|`restarting`|`running`|`removing`|`paused`|`exited`|`dead`)
    - `volume`=(`<volume name>` or `<mount point destination>`)
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ContainerListBadRequestException
    * @throws \Docker\API\Exception\ContainerListInternalServerErrorException
    *
    * @return null|\Docker\API\Model\ContainerSummaryItem[]|\Psr\Http\Message\ResponseInterface
    */
    public function containerList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\ContainersCreatePostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $name Assign the specified name to the container. Must match `/?[a-zA-Z0-9][a-zA-Z0-9_.-]+`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerCreateBadRequestException
     * @throws \Docker\API\Exception\ContainerCreateNotFoundException
     * @throws \Docker\API\Exception\ContainerCreateConflictException
     * @throws \Docker\API\Exception\ContainerCreateInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainersCreatePostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function containerCreate(\Docker\API\Model\ContainersCreatePostBody $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerCreate($requestBody, $queryParameters), $fetch);
    }
    /**
     * Return low-level information about a container.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var bool $size Return the size of container as fields `SizeRw` and `SizeRootFs`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerInspectNotFoundException
     * @throws \Docker\API\Exception\ContainerInspectInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainersIdJsonGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function containerInspect(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerInspect($id, $queryParameters), $fetch);
    }
    /**
     * On Unix systems, this is done by running the `ps` command. This endpoint is not supported on Windows.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $ps_args The arguments to pass to `ps`. For example, `aux`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerTopNotFoundException
     * @throws \Docker\API\Exception\ContainerTopInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainersIdTopGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function containerTop(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerTop($id, $queryParameters), $fetch);
    }
    /**
    * Get `stdout` and `stderr` logs from a container.
    
    Note: This endpoint works only for containers with the `json-file` or `journald` logging driver.
    
    *
    * @param string $id ID or name of the container
    * @param array $queryParameters {
    *     @var bool $follow Keep connection after returning logs.
    *     @var bool $stdout Return logs from `stdout`
    *     @var bool $stderr Return logs from `stderr`
    *     @var int $since Only return logs since this time, as a UNIX timestamp
    *     @var int $until Only return logs before this time, as a UNIX timestamp
    *     @var bool $timestamps Add timestamps to every log line
    *     @var string $tail Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ContainerLogsNotFoundException
    * @throws \Docker\API\Exception\ContainerLogsInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function containerLogs(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerLogs($id, $queryParameters), $fetch);
    }
    /**
    * Returns which files in a container's filesystem have been added, deleted,
    or modified. The `Kind` of modification can be one of:
    
    - `0`: Modified
    - `1`: Added
    - `2`: Deleted
    
    *
    * @param string $id ID or name of the container
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ContainerChangesNotFoundException
    * @throws \Docker\API\Exception\ContainerChangesInternalServerErrorException
    *
    * @return null|\Docker\API\Model\ContainersIdChangesGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
    */
    public function containerChanges(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerChanges($id), $fetch);
    }
    /**
     * Export the contents of a container as a tarball.
     *
     * @param string $id ID or name of the container
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerExportNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerExport(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerExport($id), $fetch);
    }
    /**
    * This endpoint returns a live stream of a container’s resource usage
    statistics.
    
    The `precpu_stats` is the CPU statistic of the *previous* read, and is
    used to calculate the CPU usage percentage. It is not an exact copy
    of the `cpu_stats` field.
    
    If either `precpu_stats.online_cpus` or `cpu_stats.online_cpus` is
    nil then for compatibility with older daemons the length of the
    corresponding `cpu_usage.percpu_usage` array should be used.
    
    *
    * @param string $id ID or name of the container
    * @param array $queryParameters {
    *     @var bool $stream Stream the output. If false, the stats will be output once and then it will disconnect.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ContainerStatsNotFoundException
    * @throws \Docker\API\Exception\ContainerStatsInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function containerStats(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerStats($id, $queryParameters), $fetch);
    }
    /**
     * Resize the TTY for a container.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var int $h Height of the tty session in characters
     *     @var int $w Width of the tty session in characters
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerResizeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerResize(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerResize($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $detachKeys Override the key sequence for detaching a container. Format is a single character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerStartNotFoundException
     * @throws \Docker\API\Exception\ContainerStartInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerStart(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerStart($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var int $t Number of seconds to wait before killing the container
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerStopNotFoundException
     * @throws \Docker\API\Exception\ContainerStopInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerStop(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerStop($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var int $t Number of seconds to wait before killing the container
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerRestartNotFoundException
     * @throws \Docker\API\Exception\ContainerRestartInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerRestart(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerRestart($id, $queryParameters), $fetch);
    }
    /**
     * Send a POSIX signal to a container, defaulting to killing to the container.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $signal Signal to send to the container as an integer or string (e.g. `SIGINT`)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerKillNotFoundException
     * @throws \Docker\API\Exception\ContainerKillConflictException
     * @throws \Docker\API\Exception\ContainerKillInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerKill(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerKill($id, $queryParameters), $fetch);
    }
    /**
     * Change various configuration options of a container without having to recreate it.
     *
     * @param string $id ID or name of the container
     * @param \Docker\API\Model\ContainersIdUpdatePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerUpdateNotFoundException
     * @throws \Docker\API\Exception\ContainerUpdateInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainersIdUpdatePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function containerUpdate(string $id, \Docker\API\Model\ContainersIdUpdatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerUpdate($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $name New name for the container
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerRenameNotFoundException
     * @throws \Docker\API\Exception\ContainerRenameConflictException
     * @throws \Docker\API\Exception\ContainerRenameInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerRename(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerRename($id, $queryParameters), $fetch);
    }
    /**
    * Use the freezer cgroup to suspend all processes in a container.
    
    Traditionally, when suspending a process the `SIGSTOP` signal is used, which is observable by the process being suspended. With the freezer cgroup the process is unaware, and unable to capture, that it is being suspended, and subsequently resumed.
    
    *
    * @param string $id ID or name of the container
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ContainerPauseNotFoundException
    * @throws \Docker\API\Exception\ContainerPauseInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function containerPause(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerPause($id), $fetch);
    }
    /**
     * Resume a container which has been paused.
     *
     * @param string $id ID or name of the container
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerUnpauseNotFoundException
     * @throws \Docker\API\Exception\ContainerUnpauseInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerUnpause(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerUnpause($id), $fetch);
    }
    /**
    * Attach to a container to read its output or send it input. You can attach to the same container multiple times and you can reattach to containers that have been detached.
    
    Either the `stream` or `logs` parameter must be `true` for this endpoint to do anything.
    
    See [the documentation for the `docker attach` command](https://docs.docker.com/engine/reference/commandline/attach/) for more details.
    
    ### Hijacking
    
    This endpoint hijacks the HTTP connection to transport `stdin`, `stdout`, and `stderr` on the same socket.
    
    This is the response from the daemon for an attach request:
    
    ```
    HTTP/1.1 200 OK
    Content-Type: application/vnd.docker.raw-stream
    
    [STREAM]
    ```
    
    After the headers and two new lines, the TCP connection can now be used for raw, bidirectional communication between the client and server.
    
    To hint potential proxies about connection hijacking, the Docker client can also optionally send connection upgrade headers.
    
    For example, the client sends this request to upgrade the connection:
    
    ```
    POST /containers/16253994b7c4/attach?stream=1&stdout=1 HTTP/1.1
    Upgrade: tcp
    Connection: Upgrade
    ```
    
    The Docker daemon will respond with a `101 UPGRADED` response, and will similarly follow with the raw stream:
    
    ```
    HTTP/1.1 101 UPGRADED
    Content-Type: application/vnd.docker.raw-stream
    Connection: Upgrade
    Upgrade: tcp
    
    [STREAM]
    ```
    
    ### Stream format
    
    When the TTY setting is disabled in [`POST /containers/create`](#operation/ContainerCreate), the stream over the hijacked connected is multiplexed to separate out `stdout` and `stderr`. The stream consists of a series of frames, each containing a header and a payload.
    
    The header contains the information which the stream writes (`stdout` or `stderr`). It also contains the size of the associated frame encoded in the last four bytes (`uint32`).
    
    It is encoded on the first eight bytes like this:
    
    ```go
    header := [8]byte{STREAM_TYPE, 0, 0, 0, SIZE1, SIZE2, SIZE3, SIZE4}
    ```
    
    `STREAM_TYPE` can be:
    
    - 0: `stdin` (is written on `stdout`)
    - 1: `stdout`
    - 2: `stderr`
    
    `SIZE1, SIZE2, SIZE3, SIZE4` are the four bytes of the `uint32` size encoded as big endian.
    
    Following the header is the payload, which is the specified number of bytes of `STREAM_TYPE`.
    
    The simplest way to implement this protocol is the following:
    
    1. Read 8 bytes.
    2. Choose `stdout` or `stderr` depending on the first byte.
    3. Extract the frame size from the last four bytes.
    4. Read the extracted size and output it on the correct output.
    5. Goto 1.
    
    ### Stream format when using a TTY
    
    When the TTY setting is enabled in [`POST /containers/create`](#operation/ContainerCreate), the stream is not multiplexed. The data exchanged over the hijacked connection is simply the raw data from the process PTY and client's `stdin`.
    
    *
    * @param string $id ID or name of the container
    * @param array $queryParameters {
    *     @var string $detachKeys Override the key sequence for detaching a container.Format is a single character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
    *     @var bool $logs Replay previous logs from the container.
    
    This is useful for attaching to a container that has started and you want to output everything since the container started.
    
    If `stream` is also enabled, once all the previous output has been returned, it will seamlessly transition into streaming current output.
    
    *     @var bool $stream Stream attached streams from the time the request was made onwards
    *     @var bool $stdin Attach to `stdin`
    *     @var bool $stdout Attach to `stdout`
    *     @var bool $stderr Attach to `stderr`
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ContainerAttachNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function containerAttach(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerAttach($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $detachKeys Override the key sequence for detaching a container.Format is a single character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`, `@`, `^`, `[`, `,`, or `_`.
     *     @var bool $logs Return logs
     *     @var bool $stream Return stream
     *     @var bool $stdin Attach to `stdin`
     *     @var bool $stdout Attach to `stdout`
     *     @var bool $stderr Attach to `stderr`
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerAttachWebsocketBadRequestException
     * @throws \Docker\API\Exception\ContainerAttachWebsocketNotFoundException
     * @throws \Docker\API\Exception\ContainerAttachWebsocketInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerAttachWebsocket(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerAttachWebsocket($id, $queryParameters), $fetch);
    }
    /**
     * Block until a container stops, then returns the exit code.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $condition Wait until a container state reaches the given condition, either 'not-running' (default), 'next-exit', or 'removed'.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerWaitNotFoundException
     * @throws \Docker\API\Exception\ContainerWaitInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainersIdWaitPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function containerWait(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerWait($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var bool $v Remove the volumes associated with the container.
     *     @var bool $force If the container is running, kill it before removing it.
     *     @var bool $link Remove the specified link associated with the container.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerDeleteBadRequestException
     * @throws \Docker\API\Exception\ContainerDeleteNotFoundException
     * @throws \Docker\API\Exception\ContainerDeleteConflictException
     * @throws \Docker\API\Exception\ContainerDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerDelete(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerDelete($id, $queryParameters), $fetch);
    }
    /**
     * Get a tar archive of a resource in the filesystem of container id.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $path Resource in the container’s filesystem to archive.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerArchiveNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerArchive(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerArchive($id, $queryParameters), $fetch);
    }
    /**
     * A response header `X-Docker-Container-Path-Stat` is return containing a base64 - encoded JSON object with some filesystem header information about the path.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $path Resource in the container’s filesystem to archive.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerArchiveInfoBadRequestException
     * @throws \Docker\API\Exception\ContainerArchiveInfoNotFoundException
     * @throws \Docker\API\Exception\ContainerArchiveInfoInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function containerArchiveInfo(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerArchiveInfo($id, $queryParameters), $fetch);
    }
    /**
     * Upload a tar archive to be extracted to a path in the filesystem of container id.
     *
     * @param string $id ID or name of the container
     * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     * @param array $queryParameters {
     *     @var string $path Path to a directory in the container to extract the archive’s contents into. 
     *     @var string $noOverwriteDirNonDir If “1”, “true”, or “True” then it will be an error if unpacking the given content would cause an existing directory to be replaced with a non-directory and vice versa.
     *     @var string $copyUIDGID If “1”, “true”, then it will copy UID/GID maps to the dest file or dir
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\PutContainerArchiveBadRequestException
     * @throws \Docker\API\Exception\PutContainerArchiveForbiddenException
     * @throws \Docker\API\Exception\PutContainerArchiveNotFoundException
     * @throws \Docker\API\Exception\PutContainerArchiveInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putContainerArchive(string $id, $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PutContainerArchive($id, $requestBody, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`).
    
    Available filters:
    - `until=<timestamp>` Prune containers created before this timestamp. The `<timestamp>` can be Unix timestamps, date formatted timestamps, or Go duration strings (e.g. `10m`, `1h30m`) computed relative to the daemon machine’s time.
    - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune containers with (or without, in case `label!=...` is used) the specified labels.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ContainerPruneInternalServerErrorException
    *
    * @return null|\Docker\API\Model\ContainersPrunePostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function containerPrune(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerPrune($queryParameters), $fetch);
    }
    /**
    * Returns a list of images on the server. Note that it uses a different, smaller representation of an image than inspecting a single image.
    *
    * @param array $queryParameters {
    *     @var bool $all Show all images. Only images from a final layer (no children) are shown by default.
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the images list. Available filters:
    
    - `before`=(`<image-name>[:<tag>]`,  `<image id>` or `<image@digest>`)
    - `dangling=true`
    - `label=key` or `label="key=value"` of an image label
    - `reference`=(`<image-name>[:<tag>]`)
    - `since`=(`<image-name>[:<tag>]`,  `<image id>` or `<image@digest>`)
    
    *     @var bool $digests Show digest information as a `RepoDigests` field on each image.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ImageListInternalServerErrorException
    *
    * @return null|\Docker\API\Model\ImageSummary[]|\Psr\Http\Message\ResponseInterface
    */
    public function imageList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageList($queryParameters), $fetch);
    }
    /**
    * Build an image from a tar archive with a `Dockerfile` in it.
    
    The `Dockerfile` specifies how the image is built from the tar archive. It is typically in the archive's root, but can be at a different path or have a different name by specifying the `dockerfile` parameter. [See the `Dockerfile` reference for more information](https://docs.docker.com/engine/reference/builder/).
    
    The Docker daemon performs a preliminary validation of the `Dockerfile` before starting the build, and returns an error if the syntax is incorrect. After that, each instruction is run one-by-one until the ID of the new image is output.
    
    The build is canceled if the client drops the connection by quitting or being killed.
    
    *
    * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    * @param array $queryParameters {
    *     @var string $dockerfile Path within the build context to the `Dockerfile`. This is ignored if `remote` is specified and points to an external `Dockerfile`.
    *     @var string $t A name and optional tag to apply to the image in the `name:tag` format. If you omit the tag the default `latest` value is assumed. You can provide several `t` parameters.
    *     @var string $extrahosts Extra hosts to add to /etc/hosts
    *     @var string $remote A Git repository URI or HTTP/HTTPS context URI. If the URI points to a single text file, the file’s contents are placed into a file called `Dockerfile` and the image is built from that file. If the URI points to a tarball, the file is downloaded by the daemon and the contents therein used as the context for the build. If the URI points to a tarball and the `dockerfile` parameter is also specified, there must be a file with the corresponding path inside the tarball.
    *     @var bool $q Suppress verbose build output.
    *     @var bool $nocache Do not use the cache when building the image.
    *     @var string $cachefrom JSON array of images used for build cache resolution.
    *     @var string $pull Attempt to pull the image even if an older image exists locally.
    *     @var bool $rm Remove intermediate containers after a successful build.
    *     @var bool $forcerm Always remove intermediate containers, even upon failure.
    *     @var int $memory Set memory limit for build.
    *     @var int $memswap Total memory (memory + swap). Set as `-1` to disable swap.
    *     @var int $cpushares CPU shares (relative weight).
    *     @var string $cpusetcpus CPUs in which to allow execution (e.g., `0-3`, `0,1`).
    *     @var int $cpuperiod The length of a CPU period in microseconds.
    *     @var int $cpuquota Microseconds of CPU time that the container can get in a CPU period.
    *     @var string $buildargs JSON map of string pairs for build-time variables. Users pass these values at build-time. Docker uses the buildargs as the environment context for commands run via the `Dockerfile` RUN instruction, or for variable expansion in other `Dockerfile` instructions. This is not meant for passing secret values.
    
    For example, the build arg `FOO=bar` would become `{"FOO":"bar"}` in JSON. This would result in the the query parameter `buildargs={"FOO":"bar"}`. Note that `{"FOO":"bar"}` should be URI component encoded.
    
    [Read more about the buildargs instruction.](https://docs.docker.com/engine/reference/builder/#arg)
    
    *     @var int $shmsize Size of `/dev/shm` in bytes. The size must be greater than 0. If omitted the system uses 64MB.
    *     @var bool $squash Squash the resulting images layers into a single layer. *(Experimental release only.)*
    *     @var string $labels Arbitrary key/value labels to set on the image, as a JSON map of string pairs.
    *     @var string $networkmode Sets the networking mode for the run commands during build. Supported
    standard values are: `bridge`, `host`, `none`, and `container:<name|id>`.
    Any other value is taken as a custom network's name or ID to which this
    container should connect to.
    
    *     @var string $platform Platform in the format os[/arch[/variant]]
    *     @var string $target Target build stage
    *     @var string $outputs BuildKit output configuration
    * }
    * @param array $headerParameters {
    *     @var string $Content-type 
    *     @var string $X-Registry-Config This is a base64-encoded JSON object with auth configurations for multiple registries that a build may refer to.
    
    The key is a registry URL, and the value is an auth configuration object, [as described in the authentication section](#section/Authentication). For example:
    
    ```
    {
     "docker.example.com": {
       "username": "janedoe",
       "password": "hunter2"
     },
     "https://index.docker.io/v1/": {
       "username": "mobydock",
       "password": "conta1n3rize14"
     }
    }
    ```
    
    Only the registry domain name (and port if not the default 443) are required. However, for legacy reasons, the Docker Hub registry must be specified with both a `https://` prefix and a `/v1/` suffix even though Docker will prefer to use the v2 registry API.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ImageBuildBadRequestException
    * @throws \Docker\API\Exception\ImageBuildInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function imageBuild($requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageBuild($requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var int $keep-storage Amount of disk space in bytes to keep for cache
    *     @var bool $all Remove all types of build cache
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the list of build cache objects. Available filters:
    - `until=<duration>`: duration relative to daemon's time, during which build cache was not used, in Go's duration format (e.g., '24h')
    - `id=<id>`
    - `parent=<id>`
    - `type=<string>`
    - `description=<string>`
    - `inuse`
    - `shared`
    - `private`
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\BuildPruneInternalServerErrorException
    *
    * @return null|\Docker\API\Model\BuildPrunePostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function buildPrune(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\BuildPrune($queryParameters), $fetch);
    }
    /**
     * Create an image by either pulling it from a registry or importing it.
     *
     * @param string $requestBody 
     * @param array $queryParameters {
     *     @var string $fromImage Name of the image to pull. The name may include a tag or digest. This parameter may only be used when pulling an image. The pull is cancelled if the HTTP connection is closed.
     *     @var string $fromSrc Source to import. The value may be a URL from which the image can be retrieved or `-` to read the image from the request body. This parameter may only be used when importing an image.
     *     @var string $repo Repository name given to an image when it is imported. The repo may include a tag. This parameter may only be used when importing an image.
     *     @var string $tag Tag or digest. If empty when pulling an image, this causes all tags for the given image to be pulled.
     *     @var string $message Set commit message for imported image.
     *     @var string $platform Platform in the format os[/arch[/variant]]
     * }
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64-encoded auth configuration. [See the authentication section for details.](#section/Authentication)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ImageCreateNotFoundException
     * @throws \Docker\API\Exception\ImageCreateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function imageCreate(string $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageCreate($requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Return low-level information about an image.
     *
     * @param string $name Image name or id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ImageInspectNotFoundException
     * @throws \Docker\API\Exception\ImageInspectInternalServerErrorException
     *
     * @return null|\Docker\API\Model\Image|\Psr\Http\Message\ResponseInterface
     */
    public function imageInspect(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageInspect($name), $fetch);
    }
    /**
     * Return parent layers of an image.
     *
     * @param string $name Image name or ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ImageHistoryNotFoundException
     * @throws \Docker\API\Exception\ImageHistoryInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ImagesNameHistoryGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function imageHistory(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageHistory($name), $fetch);
    }
    /**
    * Push an image to a registry.
    
    If you wish to push an image on to a private registry, that image must already have a tag which references the registry. For example, `registry.example.com/myimage:latest`.
    
    The push is cancelled if the HTTP connection is closed.
    
    *
    * @param string $name Image name or ID.
    * @param array $queryParameters {
    *     @var string $tag The tag to associate with the image on the registry.
    * }
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64-encoded auth configuration. [See the authentication section for details.](#section/Authentication)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ImagePushNotFoundException
    * @throws \Docker\API\Exception\ImagePushInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function imagePush(string $name, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImagePush($name, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Tag an image so that it becomes part of a repository.
     *
     * @param string $name Image name or ID to tag.
     * @param array $queryParameters {
     *     @var string $repo The repository to tag in. For example, `someuser/someimage`.
     *     @var string $tag The name of the new tag.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ImageTagBadRequestException
     * @throws \Docker\API\Exception\ImageTagNotFoundException
     * @throws \Docker\API\Exception\ImageTagConflictException
     * @throws \Docker\API\Exception\ImageTagInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function imageTag(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageTag($name, $queryParameters), $fetch);
    }
    /**
    * Remove an image, along with any untagged parent images that were
    referenced by that image.
    
    Images can't be removed if they have descendant images, are being
    used by a running container or are being used by a build.
    
    *
    * @param string $name Image name or ID
    * @param array $queryParameters {
    *     @var bool $force Remove the image even if it is being used by stopped containers or has other tags
    *     @var bool $noprune Do not delete untagged parent images
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ImageDeleteNotFoundException
    * @throws \Docker\API\Exception\ImageDeleteConflictException
    * @throws \Docker\API\Exception\ImageDeleteInternalServerErrorException
    *
    * @return null|\Docker\API\Model\ImageDeleteResponseItem[]|\Psr\Http\Message\ResponseInterface
    */
    public function imageDelete(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageDelete($name, $queryParameters), $fetch);
    }
    /**
    * Search for an image on Docker Hub.
    *
    * @param array $queryParameters {
    *     @var string $term Term to search
    *     @var int $limit Maximum number of results to return
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the images list. Available filters:
    
    - `is-automated=(true|false)`
    - `is-official=(true|false)`
    - `stars=<number>` Matches images that has at least 'number' stars.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ImageSearchInternalServerErrorException
    *
    * @return null|\Docker\API\Model\ImagesSearchGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
    */
    public function imageSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageSearch($queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`). Available filters:
    
    - `dangling=<boolean>` When set to `true` (or `1`), prune only
      unused *and* untagged images. When set to `false`
      (or `0`), all unused images are pruned.
    - `until=<string>` Prune images created before this timestamp. The `<timestamp>` can be Unix timestamps, date formatted timestamps, or Go duration strings (e.g. `10m`, `1h30m`) computed relative to the daemon machine’s time.
    - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune images with (or without, in case `label!=...` is used) the specified labels.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ImagePruneInternalServerErrorException
    *
    * @return null|\Docker\API\Model\ImagesPrunePostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function imagePrune(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImagePrune($queryParameters), $fetch);
    }
    /**
     * Validate credentials for a registry and, if available, get an identity token for accessing the registry without password.
     *
     * @param \Docker\API\Model\AuthConfig $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SystemAuthInternalServerErrorException
     *
     * @return null|\Docker\API\Model\AuthPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function systemAuth(\Docker\API\Model\AuthConfig $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SystemAuth($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SystemInfoInternalServerErrorException
     *
     * @return null|\Docker\API\Model\SystemInfo|\Psr\Http\Message\ResponseInterface
     */
    public function systemInfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SystemInfo(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SystemVersionInternalServerErrorException
     *
     * @return null|\Docker\API\Model\VersionGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function systemVersion(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SystemVersion(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function systemPing(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SystemPing(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function systemPingHead(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SystemPingHead(), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\ContainerConfig $requestBody 
     * @param array $queryParameters {
     *     @var string $container The ID or name of the container to commit
     *     @var string $repo Repository name for the created image
     *     @var string $tag Tag name for the create image
     *     @var string $comment Commit message
     *     @var string $author Author of the image (e.g., `John Hannibal Smith <hannibal@a-team.com>`)
     *     @var bool $pause Whether to pause the container before committing
     *     @var string $changes `Dockerfile` instructions to apply while committing
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ImageCommitNotFoundException
     * @throws \Docker\API\Exception\ImageCommitInternalServerErrorException
     *
     * @return null|\Docker\API\Model\IdResponse|\Psr\Http\Message\ResponseInterface
     */
    public function imageCommit(\Docker\API\Model\ContainerConfig $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageCommit($requestBody, $queryParameters), $fetch);
    }
    /**
    * Stream real-time events from the server.
    
    Various objects within Docker report events when something happens to them.
    
    Containers report these events: `attach`, `commit`, `copy`, `create`, `destroy`, `detach`, `die`, `exec_create`, `exec_detach`, `exec_start`, `exec_die`, `export`, `health_status`, `kill`, `oom`, `pause`, `rename`, `resize`, `restart`, `start`, `stop`, `top`, `unpause`, and `update`
    
    Images report these events: `delete`, `import`, `load`, `pull`, `push`, `save`, `tag`, and `untag`
    
    Volumes report these events: `create`, `mount`, `unmount`, and `destroy`
    
    Networks report these events: `create`, `connect`, `disconnect`, `destroy`, `update`, and `remove`
    
    The Docker daemon reports these events: `reload`
    
    Services report these events: `create`, `update`, and `remove`
    
    Nodes report these events: `create`, `update`, and `remove`
    
    Secrets report these events: `create`, `update`, and `remove`
    
    Configs report these events: `create`, `update`, and `remove`
    
    *
    * @param array $queryParameters {
    *     @var string $since Show events created since this timestamp then stream new events.
    *     @var string $until Show events created until this timestamp then stop streaming.
    *     @var string $filters A JSON encoded value of filters (a `map[string][]string`) to process on the event list. Available filters:
    
    - `config=<string>` config name or ID
    - `container=<string>` container name or ID
    - `daemon=<string>` daemon name or ID
    - `event=<string>` event type
    - `image=<string>` image name or ID
    - `label=<string>` image or container label
    - `network=<string>` network name or ID
    - `node=<string>` node ID
    - `plugin`=<string> plugin name or ID
    - `scope`=<string> local or swarm
    - `secret=<string>` secret name or ID
    - `service=<string>` service name or ID
    - `type=<string>` object to filter by, one of `container`, `image`, `volume`, `network`, `daemon`, `plugin`, `node`, `service`, `secret` or `config`
    - `volume=<string>` volume name
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\SystemEventsBadRequestException
    * @throws \Docker\API\Exception\SystemEventsInternalServerErrorException
    *
    * @return null|\Docker\API\Model\EventsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function systemEvents(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SystemEvents($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SystemDataUsageInternalServerErrorException
     *
     * @return null|\Docker\API\Model\SystemDfGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function systemDataUsage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SystemDataUsage(), $fetch);
    }
    /**
    * Get a tarball containing all images and metadata for a repository.
    
    If `name` is a specific name and tag (e.g. `ubuntu:latest`), then only that image (and its parents) are returned. If `name` is an image ID, similarly only that image (and its parents) are returned, but with the exclusion of the `repositories` file in the tarball, as there were no image names referenced.
    
    ### Image tarball format
    
    An image tarball contains one directory per image layer (named using its long ID), each containing these files:
    
    - `VERSION`: currently `1.0` - the file format version
    - `json`: detailed layer information, similar to `docker inspect layer_id`
    - `layer.tar`: A tarfile containing the filesystem changes in this layer
    
    The `layer.tar` file contains `aufs` style `.wh..wh.aufs` files and directories for storing attribute changes and deletions.
    
    If the tarball defines a repository, the tarball should also include a `repositories` file at the root that contains a list of repository and tag names mapped to layer IDs.
    
    ```json
    {
     "hello-world": {
       "latest": "565a9d68a73f6706862bfe8409a7f659776d4d60a8d096eb4a3cbce6999cc2a1"
     }
    }
    ```
    
    *
    * @param string $name Image name or ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function imageGet(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageGet($name), $fetch);
    }
    /**
    * Get a tarball containing all images and metadata for several image repositories.
    
    For each value of the `names` parameter: if it is a specific name and tag (e.g. `ubuntu:latest`), then only that image (and its parents) are returned; if it is an image ID, similarly only that image (and its parents) are returned and there would be no names referenced in the 'repositories' file for this image ID.
    
    For details on the format, see [the export image endpoint](#operation/ImageGet).
    
    *
    * @param array $queryParameters {
    *     @var array $names Image names to filter by
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function imageGetAll(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageGetAll($queryParameters), $fetch);
    }
    /**
    * Load a set of images and tags into a repository.
    
    For details on the format, see [the export image endpoint](#operation/ImageGet).
    
    *
    * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    * @param array $queryParameters {
    *     @var bool $quiet Suppress progress details during load.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ImageLoadInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function imageLoad($requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ImageLoad($requestBody, $queryParameters), $fetch);
    }
    /**
     * Run a command inside a running container.
     *
     * @param string $id ID or name of container
     * @param \Docker\API\Model\ContainersIdExecPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ContainerExecNotFoundException
     * @throws \Docker\API\Exception\ContainerExecConflictException
     * @throws \Docker\API\Exception\ContainerExecInternalServerErrorException
     *
     * @return null|\Docker\API\Model\IdResponse|\Psr\Http\Message\ResponseInterface
     */
    public function containerExec(string $id, \Docker\API\Model\ContainersIdExecPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ContainerExec($id, $requestBody), $fetch);
    }
    /**
     * Starts a previously set up exec instance. If detach is true, this endpoint returns immediately after starting the command. Otherwise, it sets up an interactive session with the command.
     *
     * @param string $id Exec instance ID
     * @param \Docker\API\Model\ExecIdStartPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function execStart(string $id, \Docker\API\Model\ExecIdStartPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ExecStart($id, $requestBody), $fetch);
    }
    /**
     * Resize the TTY session used by an exec instance. This endpoint only works if `tty` was specified as part of creating and starting the exec instance.
     *
     * @param string $id Exec instance ID
     * @param array $queryParameters {
     *     @var int $h Height of the TTY session in characters
     *     @var int $w Width of the TTY session in characters
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ExecResizeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function execResize(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ExecResize($id, $queryParameters), $fetch);
    }
    /**
     * Return low-level information about an exec instance.
     *
     * @param string $id Exec instance ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ExecInspectNotFoundException
     * @throws \Docker\API\Exception\ExecInspectInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ExecIdJsonGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function execInspect(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ExecInspect($id), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters JSON encoded value of the filters (a `map[string][]string`) to
    process on the volumes list. Available filters:
    
    - `dangling=<boolean>` When set to `true` (or `1`), returns all
      volumes that are not in use by a container. When set to `false`
      (or `0`), only volumes that are in use by one or more
      containers are returned.
    - `driver=<volume-driver-name>` Matches volumes based on their driver.
    - `label=<key>` or `label=<key>:<value>` Matches volumes based on
      the presence of a `label` alone or a `label` and a value.
    - `name=<volume-name>` Matches all or part of a volume name.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\VolumeListInternalServerErrorException
    *
    * @return null|\Docker\API\Model\VolumesGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function volumeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\VolumeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\VolumesCreatePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\VolumeCreateInternalServerErrorException
     *
     * @return null|\Docker\API\Model\Volume|\Psr\Http\Message\ResponseInterface
     */
    public function volumeCreate(\Docker\API\Model\VolumesCreatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\VolumeCreate($requestBody), $fetch);
    }
    /**
     * Instruct the driver to remove the volume.
     *
     * @param string $name Volume name or ID
     * @param array $queryParameters {
     *     @var bool $force Force the removal of the volume
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\VolumeDeleteNotFoundException
     * @throws \Docker\API\Exception\VolumeDeleteConflictException
     * @throws \Docker\API\Exception\VolumeDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function volumeDelete(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\VolumeDelete($name, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $name Volume name or ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\VolumeInspectNotFoundException
     * @throws \Docker\API\Exception\VolumeInspectInternalServerErrorException
     *
     * @return null|\Docker\API\Model\Volume|\Psr\Http\Message\ResponseInterface
     */
    public function volumeInspect(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\VolumeInspect($name), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`).
    
    Available filters:
    - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune volumes with (or without, in case `label!=...` is used) the specified labels.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\VolumePruneInternalServerErrorException
    *
    * @return null|\Docker\API\Model\VolumesPrunePostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function volumePrune(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\VolumePrune($queryParameters), $fetch);
    }
    /**
    * Returns a list of networks. For details on the format, see [the network inspect endpoint](#operation/NetworkInspect).
    
    Note that it uses a different, smaller representation of a network than inspecting a single network. For example,
    the list of containers attached to the network is not propagated in API versions 1.28 and up.
    
    *
    * @param array $queryParameters {
    *     @var string $filters JSON encoded value of the filters (a `map[string][]string`) to process on the networks list. Available filters:
    
    - `dangling=<boolean>` When set to `true` (or `1`), returns all
      networks that are not in use by a container. When set to `false`
      (or `0`), only networks that are in use by one or more
      containers are returned.
    - `driver=<driver-name>` Matches a network's driver.
    - `id=<network-id>` Matches all or part of a network ID.
    - `label=<key>` or `label=<key>=<value>` of a network label.
    - `name=<network-name>` Matches all or part of a network name.
    - `scope=["swarm"|"global"|"local"]` Filters networks by scope (`swarm`, `global`, or `local`).
    - `type=["custom"|"builtin"]` Filters networks by type. The `custom` keyword returns all user-defined networks.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\NetworkListInternalServerErrorException
    *
    * @return null|\Docker\API\Model\Network[]|\Psr\Http\Message\ResponseInterface
    */
    public function networkList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NetworkList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Network ID or name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\NetworkDeleteForbiddenException
     * @throws \Docker\API\Exception\NetworkDeleteNotFoundException
     * @throws \Docker\API\Exception\NetworkDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function networkDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NetworkDelete($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id Network ID or name
     * @param array $queryParameters {
     *     @var bool $verbose Detailed inspect output for troubleshooting
     *     @var string $scope Filter the network by scope (swarm, global, or local)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\NetworkInspectNotFoundException
     * @throws \Docker\API\Exception\NetworkInspectInternalServerErrorException
     *
     * @return null|\Docker\API\Model\Network|\Psr\Http\Message\ResponseInterface
     */
    public function networkInspect(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NetworkInspect($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\NetworksCreatePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\NetworkCreateForbiddenException
     * @throws \Docker\API\Exception\NetworkCreateNotFoundException
     * @throws \Docker\API\Exception\NetworkCreateInternalServerErrorException
     *
     * @return null|\Docker\API\Model\NetworksCreatePostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function networkCreate(\Docker\API\Model\NetworksCreatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NetworkCreate($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id Network ID or name
     * @param \Docker\API\Model\NetworksIdConnectPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\NetworkConnectForbiddenException
     * @throws \Docker\API\Exception\NetworkConnectNotFoundException
     * @throws \Docker\API\Exception\NetworkConnectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function networkConnect(string $id, \Docker\API\Model\NetworksIdConnectPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NetworkConnect($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id Network ID or name
     * @param \Docker\API\Model\NetworksIdDisconnectPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\NetworkDisconnectForbiddenException
     * @throws \Docker\API\Exception\NetworkDisconnectNotFoundException
     * @throws \Docker\API\Exception\NetworkDisconnectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function networkDisconnect(string $id, \Docker\API\Model\NetworksIdDisconnectPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NetworkDisconnect($id, $requestBody), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`).
    
    Available filters:
    - `until=<timestamp>` Prune networks created before this timestamp. The `<timestamp>` can be Unix timestamps, date formatted timestamps, or Go duration strings (e.g. `10m`, `1h30m`) computed relative to the daemon machine’s time.
    - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune networks with (or without, in case `label!=...` is used) the specified labels.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\NetworkPruneInternalServerErrorException
    *
    * @return null|\Docker\API\Model\NetworksPrunePostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function networkPrune(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NetworkPrune($queryParameters), $fetch);
    }
    /**
    * Returns information about installed plugins.
    *
    * @param array $queryParameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the plugin list. Available filters:
    
    - `capability=<capability name>`
    - `enable=<true>|<false>`
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\PluginListInternalServerErrorException
    *
    * @return null|\Docker\API\Model\Plugin[]|\Psr\Http\Message\ResponseInterface
    */
    public function pluginList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $remote The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\GetPluginPrivilegesInternalServerErrorException
     *
     * @return null|\Docker\API\Model\PluginsPrivilegesGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPluginPrivileges(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\GetPluginPrivileges($queryParameters), $fetch);
    }
    /**
    * Pulls and installs a plugin. After the plugin is installed, it can be enabled using the [`POST /plugins/{name}/enable` endpoint](#operation/PostPluginsEnable).
    
    *
    * @param \Docker\API\Model\PluginsPullPostBodyItem[] $requestBody 
    * @param array $queryParameters {
    *     @var string $remote Remote reference for plugin to install.
    
    The `:latest` tag is optional, and is used as the default if omitted.
    
    *     @var string $name Local name for the pulled plugin.
    
    The `:latest` tag is optional, and is used as the default if omitted.
    
    * }
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64-encoded auth configuration to use when pulling a plugin from a registry. [See the authentication section for details.](#section/Authentication)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\PluginPullInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function pluginPull(array $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginPull($requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\PluginInspectNotFoundException
     * @throws \Docker\API\Exception\PluginInspectInternalServerErrorException
     *
     * @return null|\Docker\API\Model\Plugin|\Psr\Http\Message\ResponseInterface
     */
    public function pluginInspect(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginInspect($name), $fetch);
    }
    /**
     * 
     *
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array $queryParameters {
     *     @var bool $force Disable the plugin before removing. This may result in issues if the plugin is in use by a container.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\PluginDeleteNotFoundException
     * @throws \Docker\API\Exception\PluginDeleteInternalServerErrorException
     *
     * @return null|\Docker\API\Model\Plugin|\Psr\Http\Message\ResponseInterface
     */
    public function pluginDelete(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginDelete($name, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array $queryParameters {
     *     @var int $timeout Set the HTTP client timeout (in seconds)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\PluginEnableNotFoundException
     * @throws \Docker\API\Exception\PluginEnableInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pluginEnable(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginEnable($name, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\PluginDisableNotFoundException
     * @throws \Docker\API\Exception\PluginDisableInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pluginDisable(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginDisable($name), $fetch);
    }
    /**
    * 
    *
    * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
    * @param \Docker\API\Model\PluginsNameUpgradePostBodyItem[] $requestBody 
    * @param array $queryParameters {
    *     @var string $remote Remote reference to upgrade to.
    
    The `:latest` tag is optional, and is used as the default if omitted.
    
    * }
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64-encoded auth configuration to use when pulling a plugin from a registry. [See the authentication section for details.](#section/Authentication)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\PluginUpgradeNotFoundException
    * @throws \Docker\API\Exception\PluginUpgradeInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function pluginUpgrade(string $name, array $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginUpgrade($name, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     * @param array $queryParameters {
     *     @var string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\PluginCreateInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pluginCreate($requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginCreate($requestBody, $queryParameters), $fetch);
    }
    /**
     * Push a plugin to the registry.
     *
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\PluginPushNotFoundException
     * @throws \Docker\API\Exception\PluginPushInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pluginPush(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginPush($name), $fetch);
    }
    /**
     * 
     *
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\PluginSetNotFoundException
     * @throws \Docker\API\Exception\PluginSetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pluginSet(string $name, array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\PluginSet($name, $requestBody), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters Filters to process on the nodes list, encoded as JSON (a `map[string][]string`).
    
    Available filters:
    - `id=<node id>`
    - `label=<engine label>`
    - `membership=`(`accepted`|`pending`)`
    - `name=<node name>`
    - `node.label=<node label>`
    - `role=`(`manager`|`worker`)`
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\NodeListInternalServerErrorException
    * @throws \Docker\API\Exception\NodeListServiceUnavailableException
    *
    * @return null|\Docker\API\Model\Node[]|\Psr\Http\Message\ResponseInterface
    */
    public function nodeList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NodeList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id The ID or name of the node
     * @param array $queryParameters {
     *     @var bool $force Force remove a node from the swarm
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\NodeDeleteNotFoundException
     * @throws \Docker\API\Exception\NodeDeleteInternalServerErrorException
     * @throws \Docker\API\Exception\NodeDeleteServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function nodeDelete(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NodeDelete($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id The ID or name of the node
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\NodeInspectNotFoundException
     * @throws \Docker\API\Exception\NodeInspectInternalServerErrorException
     * @throws \Docker\API\Exception\NodeInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Node|\Psr\Http\Message\ResponseInterface
     */
    public function nodeInspect(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NodeInspect($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id The ID of the node
     * @param \Docker\API\Model\NodeSpec $requestBody 
     * @param array $queryParameters {
     *     @var int $version The version number of the node object being updated. This is required to avoid conflicting writes.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\NodeUpdateBadRequestException
     * @throws \Docker\API\Exception\NodeUpdateNotFoundException
     * @throws \Docker\API\Exception\NodeUpdateInternalServerErrorException
     * @throws \Docker\API\Exception\NodeUpdateServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function nodeUpdate(string $id, \Docker\API\Model\NodeSpec $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\NodeUpdate($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SwarmInspectNotFoundException
     * @throws \Docker\API\Exception\SwarmInspectInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Swarm|\Psr\Http\Message\ResponseInterface
     */
    public function swarmInspect(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SwarmInspect(), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\SwarmInitPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SwarmInitBadRequestException
     * @throws \Docker\API\Exception\SwarmInitInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmInitServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmInit(\Docker\API\Model\SwarmInitPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SwarmInit($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\SwarmJoinPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SwarmJoinBadRequestException
     * @throws \Docker\API\Exception\SwarmJoinInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmJoinServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmJoin(\Docker\API\Model\SwarmJoinPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SwarmJoin($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var bool $force Force leave swarm, even if this is the last manager or that it will break the cluster.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SwarmLeaveInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmLeaveServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmLeave(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SwarmLeave($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\SwarmSpec $requestBody 
     * @param array $queryParameters {
     *     @var int $version The version number of the swarm object being updated. This is required to avoid conflicting writes.
     *     @var bool $rotateWorkerToken Rotate the worker join token.
     *     @var bool $rotateManagerToken Rotate the manager join token.
     *     @var bool $rotateManagerUnlockKey Rotate the manager unlock key.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SwarmUpdateBadRequestException
     * @throws \Docker\API\Exception\SwarmUpdateInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUpdateServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmUpdate(\Docker\API\Model\SwarmSpec $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SwarmUpdate($requestBody, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SwarmUnlockkeyInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUnlockkeyServiceUnavailableException
     *
     * @return null|\Docker\API\Model\SwarmUnlockkeyGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function swarmUnlockkey(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SwarmUnlockkey(), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\SwarmUnlockPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SwarmUnlockInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUnlockServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function swarmUnlock(\Docker\API\Model\SwarmUnlockPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SwarmUnlock($requestBody), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the services list. Available filters:
    
    - `id=<service id>`
    - `label=<service label>`
    - `mode=["replicated"|"global"]`
    - `name=<service name>`
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ServiceListInternalServerErrorException
    * @throws \Docker\API\Exception\ServiceListServiceUnavailableException
    *
    * @return null|\Docker\API\Model\Service[]|\Psr\Http\Message\ResponseInterface
    */
    public function serviceList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ServiceList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\ServicesCreatePostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ServiceCreateBadRequestException
     * @throws \Docker\API\Exception\ServiceCreateForbiddenException
     * @throws \Docker\API\Exception\ServiceCreateConflictException
     * @throws \Docker\API\Exception\ServiceCreateInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceCreateServiceUnavailableException
     *
     * @return null|\Docker\API\Model\ServicesCreatePostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function serviceCreate(\Docker\API\Model\ServicesCreatePostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ServiceCreate($requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or name of service.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ServiceDeleteNotFoundException
     * @throws \Docker\API\Exception\ServiceDeleteInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceDeleteServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function serviceDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ServiceDelete($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or name of service.
     * @param array $queryParameters {
     *     @var bool $insertDefaults Fill empty fields with default values.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ServiceInspectNotFoundException
     * @throws \Docker\API\Exception\ServiceInspectInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Service|\Psr\Http\Message\ResponseInterface
     */
    public function serviceInspect(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ServiceInspect($id, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param string $id ID or name of service.
    * @param \Docker\API\Model\ServicesIdUpdatePostBody $requestBody 
    * @param array $queryParameters {
    *     @var int $version The version number of the service object being updated. This is required to avoid conflicting writes. This version number should be the value as currently set on the service *before* the update. You can find the current version by calling `GET /services/{id}`
    *     @var string $registryAuthFrom If the `X-Registry-Auth` header is not specified, this parameter
    indicates where to find registry authorization credentials.
    
    *     @var string $rollback Set to this parameter to `previous` to cause a server-side rollback
    to the previous service spec. The supplied spec will be ignored in
    this case.
    
    * }
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ServiceUpdateBadRequestException
    * @throws \Docker\API\Exception\ServiceUpdateNotFoundException
    * @throws \Docker\API\Exception\ServiceUpdateInternalServerErrorException
    * @throws \Docker\API\Exception\ServiceUpdateServiceUnavailableException
    *
    * @return null|\Docker\API\Model\ServiceUpdateResponse|\Psr\Http\Message\ResponseInterface
    */
    public function serviceUpdate(string $id, \Docker\API\Model\ServicesIdUpdatePostBody $requestBody, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ServiceUpdate($id, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get `stdout` and `stderr` logs from a service. See also [`/containers/{id}/logs`](#operation/ContainerLogs).
     **Note**: This endpoint works only for services with the `local`, `json-file` or `journald` logging drivers.
     *
     * @param string $id ID or name of the service
     * @param array $queryParameters {
     *     @var bool $details Show service context and extra details provided to logs.
     *     @var bool $follow Keep connection after returning logs.
     *     @var bool $stdout Return logs from `stdout`
     *     @var bool $stderr Return logs from `stderr`
     *     @var int $since Only return logs since this time, as a UNIX timestamp
     *     @var bool $timestamps Add timestamps to every log line
     *     @var string $tail Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ServiceLogsNotFoundException
     * @throws \Docker\API\Exception\ServiceLogsInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceLogsServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function serviceLogs(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ServiceLogs($id, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the tasks list. Available filters:
    
    - `desired-state=(running | shutdown | accepted)`
    - `id=<task id>`
    - `label=key` or `label="key=value"`
    - `name=<task name>`
    - `node=<node id or name>`
    - `service=<service name>`
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\TaskListInternalServerErrorException
    * @throws \Docker\API\Exception\TaskListServiceUnavailableException
    *
    * @return null|\Docker\API\Model\Task[]|\Psr\Http\Message\ResponseInterface
    */
    public function taskList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\TaskList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID of the task
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\TaskInspectNotFoundException
     * @throws \Docker\API\Exception\TaskInspectInternalServerErrorException
     * @throws \Docker\API\Exception\TaskInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Task|\Psr\Http\Message\ResponseInterface
     */
    public function taskInspect(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\TaskInspect($id), $fetch);
    }
    /**
     * Get `stdout` and `stderr` logs from a task. See also [`/containers/{id}/logs`](#operation/ContainerLogs).
     **Note**: This endpoint works only for services with the `local`, `json-file` or `journald` logging drivers.
     *
     * @param string $id ID of the task
     * @param array $queryParameters {
     *     @var bool $details Show task context and extra details provided to logs.
     *     @var bool $follow Keep connection after returning logs.
     *     @var bool $stdout Return logs from `stdout`
     *     @var bool $stderr Return logs from `stderr`
     *     @var int $since Only return logs since this time, as a UNIX timestamp
     *     @var bool $timestamps Add timestamps to every log line
     *     @var string $tail Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\TaskLogsNotFoundException
     * @throws \Docker\API\Exception\TaskLogsInternalServerErrorException
     * @throws \Docker\API\Exception\TaskLogsServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taskLogs(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\TaskLogs($id, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the secrets list. Available filters:
    
    - `id=<secret id>`
    - `label=<key> or label=<key>=value`
    - `name=<secret name>`
    - `names=<secret name>`
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\SecretListInternalServerErrorException
    * @throws \Docker\API\Exception\SecretListServiceUnavailableException
    *
    * @return null|\Docker\API\Model\Secret[]|\Psr\Http\Message\ResponseInterface
    */
    public function secretList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SecretList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\SecretsCreatePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SecretCreateConflictException
     * @throws \Docker\API\Exception\SecretCreateInternalServerErrorException
     * @throws \Docker\API\Exception\SecretCreateServiceUnavailableException
     *
     * @return null|\Docker\API\Model\IdResponse|\Psr\Http\Message\ResponseInterface
     */
    public function secretCreate(\Docker\API\Model\SecretsCreatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SecretCreate($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID of the secret
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SecretDeleteNotFoundException
     * @throws \Docker\API\Exception\SecretDeleteInternalServerErrorException
     * @throws \Docker\API\Exception\SecretDeleteServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function secretDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SecretDelete($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID of the secret
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SecretInspectNotFoundException
     * @throws \Docker\API\Exception\SecretInspectInternalServerErrorException
     * @throws \Docker\API\Exception\SecretInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Secret|\Psr\Http\Message\ResponseInterface
     */
    public function secretInspect(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SecretInspect($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id The ID or name of the secret
     * @param \Docker\API\Model\SecretSpec $requestBody 
     * @param array $queryParameters {
     *     @var int $version The version number of the secret object being updated. This is required to avoid conflicting writes.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\SecretUpdateBadRequestException
     * @throws \Docker\API\Exception\SecretUpdateNotFoundException
     * @throws \Docker\API\Exception\SecretUpdateInternalServerErrorException
     * @throws \Docker\API\Exception\SecretUpdateServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function secretUpdate(string $id, \Docker\API\Model\SecretSpec $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\SecretUpdate($id, $requestBody, $queryParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the configs list. Available filters:
    
    - `id=<config id>`
    - `label=<key> or label=<key>=value`
    - `name=<config name>`
    - `names=<config name>`
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Docker\API\Exception\ConfigListInternalServerErrorException
    * @throws \Docker\API\Exception\ConfigListServiceUnavailableException
    *
    * @return null|\Docker\API\Model\Config[]|\Psr\Http\Message\ResponseInterface
    */
    public function configList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ConfigList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Docker\API\Model\ConfigsCreatePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ConfigCreateConflictException
     * @throws \Docker\API\Exception\ConfigCreateInternalServerErrorException
     * @throws \Docker\API\Exception\ConfigCreateServiceUnavailableException
     *
     * @return null|\Docker\API\Model\IdResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configCreate(\Docker\API\Model\ConfigsCreatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ConfigCreate($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID of the config
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ConfigDeleteNotFoundException
     * @throws \Docker\API\Exception\ConfigDeleteInternalServerErrorException
     * @throws \Docker\API\Exception\ConfigDeleteServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ConfigDelete($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID of the config
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ConfigInspectNotFoundException
     * @throws \Docker\API\Exception\ConfigInspectInternalServerErrorException
     * @throws \Docker\API\Exception\ConfigInspectServiceUnavailableException
     *
     * @return null|\Docker\API\Model\Config|\Psr\Http\Message\ResponseInterface
     */
    public function configInspect(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ConfigInspect($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id The ID or name of the config
     * @param \Docker\API\Model\ConfigSpec $requestBody 
     * @param array $queryParameters {
     *     @var int $version The version number of the config object being updated. This is required to avoid conflicting writes.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\ConfigUpdateBadRequestException
     * @throws \Docker\API\Exception\ConfigUpdateNotFoundException
     * @throws \Docker\API\Exception\ConfigUpdateInternalServerErrorException
     * @throws \Docker\API\Exception\ConfigUpdateServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configUpdate(string $id, \Docker\API\Model\ConfigSpec $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\ConfigUpdate($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Return image digest and platform information by contacting the registry.
     *
     * @param string $name Image name or id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Docker\API\Exception\DistributionInspectUnauthorizedException
     * @throws \Docker\API\Exception\DistributionInspectInternalServerErrorException
     *
     * @return null|\Docker\API\Model\DistributionNameJsonGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function distributionInspect(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\DistributionInspect($name), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function session(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Docker\API\Endpoint\Session(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/v1.40');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Docker\API\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}