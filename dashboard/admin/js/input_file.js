
document.querySelectorAll('form').forEach(function(item){
    item.children[0].children[0].insertAdjacentHTML('afterend', '<button class="file-button">Choose file</button><span class="file-name">No file chosen</span>');
    item.children[0].children[0].addEventListener('change', function(){
      const splitFileName = this.value.split(/\\/);
      item.children[0].children[2].innerText = splitFileName[splitFileName.length - 1];
    });
  });