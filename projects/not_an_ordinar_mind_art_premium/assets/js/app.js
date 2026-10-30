const cursor=document.querySelector('#cursor');
document.addEventListener('mousemove',e=>{if(cursor){cursor.style.transform=`translate(${e.clientX-7}px,${e.clientY-7}px)`}});
const scene=document.querySelector('#scene');
if(scene && matchMedia('(min-width:901px)').matches){
 document.addEventListener('mousemove',e=>{
  const x=(e.clientX/innerWidth-.5)*2,y=(e.clientY/innerHeight-.5)*2;
  scene.style.transform=`translateY(-50%) rotateY(${x*4}deg) rotateX(${y*-3}deg)`;
 });
}
const search=document.querySelector('#search'),cards=[...document.querySelectorAll('.card')],empty=document.querySelector('#empty');
search?.addEventListener('input',e=>{
 const q=e.target.value.toLowerCase().trim();let n=0;
 cards.forEach(c=>{const ok=c.dataset.title.includes(q)||c.dataset.cat.includes(q);c.style.display=ok?'':'none';if(ok)n++});
 empty.style.display=n?'none':'block';
});
document.querySelectorAll('.heart').forEach(b=>{
 const k='naom3d-'+b.dataset.id;if(localStorage.getItem(k)){b.classList.add('saved');b.textContent='♥'}
 b.onclick=e=>{e.stopPropagation();const s=b.classList.toggle('saved');b.textContent=s?'♥':'♡';localStorage.setItem(k,s?'1':'')}
});
const box=document.querySelector('#lightbox'),img=document.querySelector('#lightimg'),title=document.querySelector('#lighttitle');
document.querySelectorAll('.open-art,.card-media img').forEach(el=>el.onclick=()=>{
 img.src=el.dataset.image||el.src;title.textContent=el.dataset.title||el.alt;box.classList.add('open');
});
document.querySelector('#close').onclick=()=>box.classList.remove('open');
box.onclick=e=>{if(e.target===box)box.classList.remove('open')};
document.addEventListener('keydown',e=>{if(e.key==='Escape')box.classList.remove('open')});
