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
                'playlistId' => 'PL6j_c0Ky6NyFMxjsFoectdyoIOHCXw_7o',
                'maxResults'=> '10',
                'key'=> $apiKey
            ];
            $url = $baseUrl . 'playlistItems?' . http_build_query($params);
            $json = json_decode(file_get_contents($url), true);

            $videos = [];
            foreach($json['items'] as $video)
                $videos[] = array('v_id' =>$video['snippet']['resourceId']['videoId'],'v_name' => $video['snippet']['title']);   
?>

<div class="row">
    <div class="col-md-8">
        <div class="owl-carousel slide">
            <?php foreach($videos as $video=>$value){  if(isset($video)){
           
			echo '<div class="item-video" data-hash="'. $value['v_id'].'">
			<a class="owl-video" href="https://youtu.be/'.$value['v_id'].'">
            </a>
			</div>';
                }
            }
            ?>
        </div>
    </div>
    <div class="col-md-4">
        <div>
            <div class="row side-media">
                <?php foreach($videos as $video=>$value){if(isset($video)){?>
                    <a href="#<?php echo $value['v_id'];?>" class="media-title">
                    <div class="col-md-12 d-flex item-vids pb-4">
                        <div class="media small-thumb text-light col-md-6">
                            <img style=" width: 180px !important;" src="<?php echo 'https://img.youtube.com/vi/'.$value['v_id'].'/mqdefault.jpg';?>" alt="">
                        </div>
                        <div class="media-body col-md-6">
                            <h4 class="uk-text-bold" ><?php echo $value['v_name'];?> </h4>
                        </div>
                        </div> 
                    </a>
                
                <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>
</div>
</div>
