<div class="mt-3">
<h5 class="cat-title" style="text-align: center;
    padding: 12px 0px; background-color: #029F00; color:white; "><span class="inner-cat px-3"> Techkagaj Video </span></h5>
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
        'playlistId' => $playlist,
        'maxResults'=> '4',
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
			<a class="owl-video" href="https://youtu.be/'.$value['v_id'].'"></a>
			</div>';
                }
            }
            ?>
    </div>
</div>
<div class="col-md-4">
    <div>
        <div class="row ">
       <?php foreach($videos as $video=>$value){if(isset($video)){?>
            <div class=" item-vids">
            <a href="#<?php echo $value['v_id'];?>">
                <div class="media small-thumb text-light">
                    <img style=" width: 155px !important;" src="<?php echo 'https://img.youtube.com/vi/'.$value['v_id'].'/mqdefault.jpg';?>" alt="">
						
                    <div class="media-body ml-2">
                      
                            <h4 class="uk-text-bold" style="font-size: 1rem;color:black">
                                <?php echo $value['v_name'];?> </h4>
                       
                    </div>
                </div>
            </a>
            </div> <?php
                    }
                }
                ?>
        </div>
	
    </div>
</div>
	</div>
</div>       
            
            <style>
	.videos .owl-nav{display:none};
    .small-thumb{
				    display: flex;
    	flex-direction: inherit;
    	align-items: center;
			}
			.item-v {
				border-bottom: 1px solid #221b1b;
    padding: 5px;
			}
		.owl-video-wrapper {
    height: 469px !important;
}
				.item-vids {
    border-bottom: 1px solid #ffffff;
    padding: 13px 0px;
}
</style>
