<?php 
$baseUrl = 'https://www.googleapis.com/youtube/v3/';
$apiKey = 'AIzaSyAzrqFl74B7x2E1i0LxNLvwonNzlAEMTto';
$channelId = 'UC4ulcG4kfgeJ71ao5JiDZfg';

    $params = [
        'id'=> $channelId,
        'part'=> 'contentDetails',
        'key'=> $apiKey
    ];
    $url = $baseUrl . 'channels?' . http_build_query($params);
    $json = json_decode(file_get_contents($url), true);

    $playlist = $json['items'][0]['contentDetails']['relatedPlaylists']['uploads'];

    $params = [
        'part'=> 'snippet',
        'playlistId' => 'PUbs0xk6PavMVDt5UJqxGV6g',
        'maxResults'=> '12',
        'key'=> $apiKey
    ];
    $url = $baseUrl . 'playlistItems?' . http_build_query($params);
    $json = json_decode(file_get_contents($url), true);

    $videos = [];
    foreach($json['items'] as $video)
        $videos[] = array('v_id' =>$video['snippet']['resourceId']['videoId'],'v_name' => $video['snippet']['title']);   
?>

<div class="row">
                <section class="popular-section">
                <?php foreach($videos as $video=>$value){if(isset($video)){?>
                    
                    <a href="https://youtu.be/'.$value['v_id'].'&list=PUbs0xk6PavMVDt5UJqxGV6g&ab_channel=Galaxy4K" class="media-title">
                    <div class="popular">
                        <div class="media small-thumb text-light col-md-6">
                            <img  src="<?php echo 'https://img.youtube.com/vi/'.$value['v_id'].'/mqdefault.jpg';?>" alt="">
                        </div>

                        </div> 
                    </a>
                
                <?php
                    }
                }
                ?>
                </section>
</div>
</div>
