<?php


namespace Pinweb\Qnlive;

use Illuminate\Support\Collection;
use Qiniu\Pili\Mac;
use Qiniu\Pili\Client;
use Qiniu\Pili\Hub;
use Qiniu\Pili\Stream;
use function Qiniu\Pili\HDLPlayURL;
use function Qiniu\Pili\HLSPlayURL;
use function Qiniu\Pili\RTMPPlayURL;
use function Qiniu\Pili\RTMPPublishURL;
use function Qiniu\Pili\SnapshotPlayURL;

class Qnlive
{
    private $hub;

    public function __construct($ak = null, $sk = null, $hub = null)
    {
        $mac = new Mac($ak, $sk);
        $client = new Client($mac);
        $this->hub = $client->hub($hub);
    }

    public function hub()
    {
        return $this->hub;
    }

    public function pushUrl($stream)
    {
        return RTMPPublishURL(
            config('qnlive.push_domain'),
            config('qnlive.hub'),
            $stream,
            config('qnlive.expire'),
            config('qnlive.ak'),
            config('qnlive.sk')
        );
    }

    /**
     * Undocumented function
     *
     * @param [type] $stream
     * @return Collection
     */
    public function playUrl($stream)
    {
        return collect([
            'rtmp' => RTMPPlayURL(config('qnlive.rtmp_domain'), config('qnlive.hub'), $stream),
            'hls' => HLSPlayURL(config('qnlive.hls_domain'), config('qnlive.hub'), $stream),
            'hdl' => HDLPlayURL(config('qnlive.hdl_domain'), config('qnlive.hub'), $stream),
            'snapshot' => SnapshotPlayURL(config('qnlive.snapshot_domain'), config('qnlive.hub'), $stream),
        ]);
    }
}
