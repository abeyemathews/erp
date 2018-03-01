<div id="content" class="fluid-container">
  
</div>
<button id="btn1">hello1</button>
<script>
$(document).ready(function() {
    console.log( "ready!" );
    $('#btn1').click(function(){alert('html button')});
    $('#btn').click(function(){alert('dynamic button')});
    $('#content').html('<button id="btn">hello</button>');
});
</script>

<script>
$(document).on('click','#btn',function(){alert('dynamic button')});

</script>
