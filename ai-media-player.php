<?php
/*
Plugin Name: AI Media Player
Description: Media player for Loudmusic AI audio generation playbacks.
Version: 1.0.0
Author: Umayanga Madushan
Author URI: https://facebook/umayangalk
License: GPL-2.0+
GitHub Plugin URI: UtopiaLab/AI-Media-Player
*/

function ai_audio_player_enqueue_scripts() {
    $js_file_path = plugin_dir_path(__FILE__) . 'js/script.js';
    $js_file_version = md5_file($js_file_path);
    wp_enqueue_script('ai-player-js', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), $js_file_version, true);

    $css_file_path = plugin_dir_path(__FILE__) . 'css/style.css';
    $css_file_version = md5_file($css_file_path);
    wp_enqueue_style('ai-player-css', plugin_dir_url(__FILE__) . 'css/style.css', array(), $css_file_version);
    
    // wp_localize_script('ai-player-js', 'loaderData', array(
    //     'ajax_url' => admin_url('admin-ajax.php'),
    // ));
}
add_action('wp_enqueue_scripts', 'ai_audio_player_enqueue_scripts');

function ai_audio_player_function() {
    ?>
    
    <link
  href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap"
  rel="stylesheet"
/>
<div class="container">
  <div class="bubble pink-bubble"></div>
  <div class="bubble blue-bubble"></div>
  <div class="bubble small-p-bubble"></div>
  <div class="bubble small-b-bubble"></div>
  <div class="wrapper">
    <div class="app-ui right-ui">
      <div class="play-action">
        <div class="half-arrow">
          <div class="line">
            <div class="other-line"></div>
          </div>
        </div>
        <div class="what-play">LoudMusic.io</div>
        <div class="double-dot">
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
      </div>
      <div class="app-ui inside-right">
        <div class="bigPlay">
            <div class="play-container">
          <img src="https://images.unsplash.com/photo-1521133573892-e44906baee46?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" />
          <div class="grey-detail"></div>
          <div class="grey-detail-sec"></div>
          <button class="btn play-pause">
            <div class="icon-container">
              <div class="icon play bigger-play">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 308.838 308.838"
                >
                  <path
                    fill="#063064"
                    d="M269.394 139.638c-.4-.8-.8-1.2-1.2-1.6-.8-1.2-1.6-2-2.8-3.2-1.2-1.2-2.8-2.4-4-3.2l-91.6-63.2-92-63.6c-6-4.4-13.6-5.6-20.4-4.4s-13.2 5.2-17.2 11.2c-1.6 2.4-2.8 4.8-3.6 7.2-.8 2-1.2 4-1.2 6.4v256.4c0 7.6 3.2 14.4 8 19.2 4.4 4.8 11.2 8 18.8 8 3.2 0 6.4-.4 9.2-1.6 2.8-.8 5.2-2.4 7.6-4.4l90.8-62.8 91.2-63.2c.4-.4 1.2-.8 1.6-1.2 5.6-4.4 9.2-10.4 10.4-16.8 1.2-6.4 0-13.6-3.6-19.2zm-20 20.4l-92 63.6-90.4 62.4c-.4 0-.8.4-.8.4-.4.4-1.2.8-2 1.2-.8.4-1.2.4-2 .4-1.6 0-3.2-.8-4.4-1.6-1.2-1.2-1.6-2.8-1.6-4.4v-127.6h-.4v-126-1.6c0-.4 0-.8.4-1.2 0-.4.4-.8.4-1.2.4-.4.4-.4.4-.8.8-1.2 2.4-2 3.6-2 1.6-.4 2.8 0 4.4.8.4.4.8.4 1.2.8l91.2 63.2 91.6 63.2c.4.4.8.4.8.8.4.4.4.8.8.8.8 1.6 1.2 3.2 1.2 4.8-.4 1.6-1.2 3.2-2.4 4z"
                    class="active-path"
                    data-old_color="#000000"
                    data-original="#000000"
                  />
                </svg>
              </div>
            </div>
            <div class="icon-container">
              <div class="icon pause bigger-pause">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 493.528 493.528"
                >
                  <path
                    fill="#063064"
                    d="M178.064 0L166.04.248c-14.876 0-27.236 12.112-27.236 26.992v439.664c0 14.876 13.396 26.624 28.272 26.624h.084l10.976-.072c14.892 0 26.22-11.92 26.22-26.808V26.996C204.352 12.116 193.028 0 178.064 0zM328.584 0l-12.092.248c-14.88 0-27.3 12.112-27.3 26.992v439.664c0 14.876 13.708 26.624 28.58 26.624h.084l10.816-.072c14.88 0 26.052-11.92 26.052-26.808V26.996C354.72 12.116 343.548 0 328.584 0z"
                    class="active-path"
                    data-old_color="#000000"
                    data-original="#000000"
                  />
                </svg>
              </div>
            </div>
          </button>
        </div>
          <div class="song-detail right-detail">
          <div class="song-name right-song">Tearing Me Up</div>
          <div class="artist play-artist right-artist">Bob Moses</div>
       
        </div>
          <div class="line-wrapper">
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
        <div class="lines grey"></div>
       </div>
          <div class="second">
            <div class="listened">0:39</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.88 477.88">
  <path fill="#063064" d="M468.46 1.8a17.06 17.06 0 00-15.3 0L9.44 223.69a17.07 17.07 0 004.58 32.05l176.1 32.03 32.04 176.11a17.07 17.07 0 0032.05 4.58L476.07 24.7a17.07 17.07 0 00-7.61-22.9z" class="active-path" data-old_color="#000000" data-original="#000000"/>
</svg>
            <div class="listen">6:28</div>
          </div>
       <div class="left-bar-wrapper">
         <svg class="addTo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
  <path fill="#063064" d="M934 822H794v140c0 15.5-12.5 28-28 28s-28-12.5-28-28V822H598c-15.5 0-28-12.5-28-28s12.5-28 28-28h140V626c0-15.5 12.5-28 28-28s28 12.5 28 28v140h140c15.5 0 28 12.5 28 28s-12.5 28-28 28zM738 122c0-30.9-25.1-56-56-56H150c-30.9 0-56 25.1-56 56v756c0 30.9 25.1 56 56 56h364v56H122c-46.4 0-84-37.6-84-84V94c0-46.4 37.6-84 84-84h588c46.4 0 84 37.6 84 84v364h-56V122z"/>
</svg>
         <svg class="menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
  <path d="M977.8 524.5H22.3c-6.8 0-12.3-5.5-12.3-12.3v-24.5c0-6.7 5.5-12.3 12.3-12.3h955.5c6.8 0 12.3 5.5 12.3 12.3v24.5c-.1 6.8-5.6 12.3-12.3 12.3zm-49.1-294H757.2c-6.8 0-12.3-5.5-12.3-12.2v-24.5c0-6.8 5.5-12.3 12.3-12.3h171.5c6.8 0 12.3 5.5 12.3 12.3v24.5c0 6.7-5.5 12.2-12.3 12.2zm-294 0H71.3c-6.8 0-12.3-5.5-12.3-12.2v-24.5c0-6.8 5.5-12.3 12.3-12.3h563.5c6.8 0 12.3 5.5 12.3 12.3v24.5c-.1 6.7-5.6 12.2-12.4 12.2zm-563.4 539h171.5c6.8 0 12.2 5.5 12.2 12.2v24.5c0 6.8-5.5 12.3-12.2 12.3H71.3c-6.8 0-12.3-5.5-12.3-12.3v-24.5c0-6.7 5.5-12.2 12.3-12.2zm293.9 0h563.5c6.8 0 12.3 5.5 12.3 12.2v24.5c0 6.8-5.5 12.3-12.3 12.3H365.2c-6.8 0-12.3-5.5-12.3-12.3v-24.5c.1-6.7 5.6-12.2 12.3-12.2z"/>
</svg>
          <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 -28 512 512">
  <path fill="#EBC7E5" d="M471.383 44.578C444.879 15.832 408.512 0 368.973 0c-29.555 0-56.621 9.344-80.45 27.77C276.5 37.07 265.605 48.45 256 61.73c-9.602-13.277-20.5-24.66-32.527-33.96C199.648 9.344 172.582 0 143.027 0c-39.539 0-75.91 15.832-102.414 44.578C14.426 72.988 0 111.801 0 153.871c0 43.3 16.137 82.938 50.781 124.742 30.992 37.395 75.535 75.356 127.117 119.313 17.614 15.012 37.579 32.027 58.309 50.152A30.023 30.023 0 00256 455.516c7.285 0 14.316-2.641 19.785-7.43 20.73-18.129 40.707-35.152 58.328-50.172 51.575-43.95 96.117-81.906 127.11-119.305C495.867 236.81 512 197.172 512 153.867c0-42.066-14.426-80.879-40.617-109.289zm0 0" class="active-path" data-old_color="#000000" data-original="#000000"/>
</svg>
        </div>
        </div>  
      </div>
    </div>
  </div>
  <div></div>
</div>

<audio style="display: none;" controls id="audio">
  <source src="https://apperal.test/wp-content/uploads/2024/02/Sanjula-Himala-Ft-Kaizer-Kaiz-Gata-Dodam-Ananmanan.lk_.mp3" type="audio/ogg">
Your browser does not support the audio element.
</audio>

    <?php
}

add_shortcode('ai-audio-player', 'ai_audio_player_function');

?>