let check=document.querySelectorAll('input[type=checkbox name=done]');
check.forEach(ch=>{
    ch.addEventListener('click',function(){
        this.parentNode.submit();
    })
})
