// hover image flip for projects


$(document).ready(function () {
    $('.flipbook').each(function () {
      const $container = $(this);
      const $img = $container.find('img');
      const folder = $container.data('folder');
      const frameCount = parseInt($container.data('frames'));
      const frames = [];
  
      for (let i = 1; i <= frameCount; i++) {
        frames.push(`${folder}/frame${i}.png`);
      }
  
      let index = 0;
      let interval;
  
      $container.on('mouseenter', function () {
        interval = setInterval(() => {
          $img.attr('src', frames[index]);
          index = (index + 1) % frameCount;
        }, 150);
      });
  
      $container.on('mouseleave', function () {
        clearInterval(interval);
        index = 0;
        $img.attr('src', frames[0]);
      });
    });
  });
  
  
