<script type="text/javascript">$(function(){

// Initialize syntax highlighting
if (typeof hljs !== 'undefined') {
    hljs.highlightAll();
}

// Copy to clipboard functionality
$('.copy-btn').on('click', function() {
    var $btn = $(this);
    var $codeBlock = $btn.siblings('pre').find('code');
    var textToCopy = $codeBlock.text();
    
    navigator.clipboard.writeText(textToCopy).then(function() {
        var $icon = $btn.find('.material-icons');
        var originalText = $icon.text();
        
        $icon.text('check');
        $btn.addClass('copied');
        
        setTimeout(function() {
            $icon.text(originalText);
            $btn.removeClass('copied');
        }, 2000);
    }).catch(function(err) {
        console.error('Failed to copy: ', err);
    });
});

});</script>