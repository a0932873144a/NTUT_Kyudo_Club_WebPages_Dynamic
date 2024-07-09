
$(document).ready(function(){
    // 當選擇類型改變時觸發事件
    $('#bow-type').change(function(){
        // 先隱藏所有選單
        $('#menu1').hide();
        $('#menu2').hide();
        $('#menu3').hide();
        
        // 根據選擇顯示相應的選單
        var type = $(this).val();
        if(type == "bow"){
            $('#menu1').show();
        } else if(type == "arrow"){
            $('#menu2').show();
        } else if(type == "glove"){
            $('#menu3').show();
        }
    });
});
