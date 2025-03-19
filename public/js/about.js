const about_members = document.querySelectorAll('#about_member')
const count_members = document.querySelectorAll('#count_member')
const scrollable = document.getElementById('scrollable')
const notice_scrollable = document.getElementById('notice_scrollable')
const notices = document.querySelectorAll('notice')
const count_notices = document.querySelectorAll('count_notice')


function isElementHorizontallyVisible(el) {
    if (!el) return false;
    const rect = el.getBoundingClientRect();
    return rect.right > 0 && rect.left < window.innerWidth;
  }

scrollable.addEventListener('scroll',(e)=>{
    about_members.forEach(member => {
        count_members.forEach(count =>{
            if (isElementHorizontallyVisible(member)){
                if (member.dataset.iteration == count.dataset.iteration){
                    count.classList.remove('w-2')
                    count.classList.add('w-6')
                }               
            }
            else{
                if (member.dataset.iteration == count.dataset.iteration){
                    count.classList.remove('w-6')
                    count.classList.add('w-2')
                } 
            }
        })
    });
})

notice_scrollable.addEventListener('scroll',(e)=>{
    notices.forEach(notice => {        
        count_notices.forEach(count_notice =>{
            if (isElementHorizontallyVisible(notice)){
                if (notice.dataset.number == count_notice.dataset.number){
                    count_notice.classList.remove('w-2')
                    count_notice.classList.add('w-6')
                    
                }               
            }
            else{
                if (notice.dataset.number == count_notice.dataset.number){
                    count_notice.classList.remove('w-6')
                    count_notice.classList.add('w-2')
                } 
            }
        })
    });
})
