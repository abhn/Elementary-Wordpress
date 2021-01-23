document.addEventListener("DOMContentLoaded", () => {
  init();
});

const init = () => {
  const darkSwitchesArray = document.querySelectorAll('#dark-mode-toggle');
  darkSwitchesArray.forEach(darkSwitch => {
    darkSwitch.addEventListener('change', handleNightModeToggle);
  });
  checkCookie();
};

const checkCookie = () => {
  if(getCookie('nightMode')) {
    toggleDarkMode();
  }
};

const handleNightModeToggle = () => {
  if(getCookie('nightMode')) {
    setCookie('nightMode', false, 365);
  } else {
    setCookie('nightMode', true, 365);
  }
  toggleDarkMode();
};

// dark mode toggle
const toggleDarkMode = () => {
  document.body.classList.toggle('dark');
};

// https://stackoverflow.com/questions/14573223/set-cookie-and-get-cookie-with-javascript
function setCookie(name,value,days) {
  let expires = "";
  if (days) {
    let date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000));
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
  let nameEQ = name + "=";
  let ca = document.cookie.split(';');
  for(let i=0;i < ca.length;i++) {
    let c = ca[i];
    while (c.charAt(0) ===' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}
// end cookie getter/setter

// the post scroll bar on top of posts
let scrollPercent;
let scrollListener = () => {
  let scrollTop = document.documentElement["scrollTop"] || document.body["scrollTop"];
  let scrollBottom = (document.documentElement["scrollHeight"] ||
    document.body["scrollHeight"]) - document.documentElement.clientHeight;
  scrollPercent = scrollTop / scrollBottom * 100 + "%";
  let progress = document.getElementById("_progress");
  progress && progress.style.setProperty("--scroll", scrollPercent);
};
document.addEventListener("scroll", scrollListener, { passive: true });

// tags filter
const tagsSelector = document.querySelector('#tag-filter');
if(tagsSelector) {
  tagsSelector.addEventListener('change', e => {
    const selectedTag = e.target.value;
    const allPostsOnIndex = document.querySelectorAll('#posts-container')[0].children;
    for(post of allPostsOnIndex) {
      if(selectedTag === 'all-tags') {
        post.classList.remove('hidden');
        continue;
      }
      const tags = post.dataset.tags.split(',');
      if(!tags.includes(selectedTag)) {
        post.classList.add('hidden');
      }
      else {
        post.classList.remove('hidden');
      }
    }
  })  
}
