<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#111111">
<title>فروج وتوم | المنيو</title>
<meta name="description" content="فروج على الفحم، ساندويشات، وجبات، مقبلات ومشروبات. البابلية والجوّار. للطلب: 76 195 012">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;800&display=swap" rel="stylesheet">
<style>
:root{
  --bg:#111111; --card:#1b1b1b; --line:#2c2c2c;
  --text:#f5f1ea; --muted:#a8a29a;
  --accent:#f5a623; --green:#25d366; --red:#ff4757;
}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:'Cairo',Tahoma,sans-serif;line-height:1.6}
.wrap{max-width:720px;margin:0 auto;padding:0 16px}

/* Hero */
.hero{text-align:center;padding:48px 16px 32px;background:radial-gradient(ellipse at top,#2a1d0a 0%,var(--bg) 70%)}
.hero h1{font-size:clamp(2.4rem,9vw,3.6rem);font-weight:800;color:var(--accent);line-height:1.2}
.hero p{color:var(--muted);margin:8px 0 24px;font-size:1.05rem}
.actions{display:flex;gap:10px;justify-content:center;flex-wrap:wrap}
.btn{display:inline-flex;align-items:center;gap:8px;padding:12px 20px;border-radius:999px;font:600 1rem 'Cairo',sans-serif;text-decoration:none;border:1px solid var(--line);color:var(--text);background:var(--card);cursor:pointer}
.btn.wa{background:var(--green);border-color:var(--green);color:#06210f}
.btn.danger{background:var(--red);border-color:var(--red);color:#fff;padding:4px 8px;font-size:0.8rem;border-radius:6px;}
.btn.admin-toggle{background:var(--line);font-size:0.85rem;padding:6px 14px;margin-bottom:20px;}
.btn:focus-visible{outline:2px solid var(--accent);outline-offset:2px}

/* Menu */
.menu-title{margin:32px 0 4px;font-size:1.8rem;font-weight:800}
.sub{color:var(--muted);margin-bottom:24px}
.cat{background:var(--card);border:1px solid var(--line);border-radius:18px;overflow:hidden;margin-bottom:20px}
.cat-img{height:250px;background:#2a2a2a center/cover no-repeat;position:relative}
.cat-img::after{content:"";position:absolute;inset:0;background:linear-gradient(transparent 30%,var(--card))}
.cat h3{position:absolute;z-index:1;bottom:10px;right:16px;font-size:1.35rem;font-weight:800}
.items{list-style:none;padding:4px 16px 12px}
.items li{display:flex;justify-content:space-between;align-items:center;gap:12px;padding:10px 0;border-bottom:1px dashed var(--line)}
.items li:last-child{border-bottom:0}
.item-info{display:flex;align-items:center;gap:10px;flex-grow:1}
.name{font-weight:600}
.en{display:block;font-size:.8rem;color:var(--muted);font-weight:400;direction:ltr;text-align:right}
.price{color:var(--accent);font-weight:800;white-space:nowrap;direction:ltr}

/* Add Item Form inside Category (Hidden by default for customers) */
.add-item-form{display:none; padding:12px 16px;background:rgba(255,255,255,0.03);border-top:1px solid var(--line);flex-direction:column;gap:8px}
.admin-mode .add-item-form {display: flex;}
.admin-mode .admin-only-btn {display: inline-flex;}
.admin-only-btn {display: none;}

.add-item-form input{background:var(--bg);border:1px solid var(--line);color:var(--text);padding:8px 12px;border-radius:8px;font:inherit;font-size:0.9rem}
.add-item-row{display:flex;gap:8px}
.add-item-row input{flex:1}
.btn-add{background:var(--accent);color:#111;border:none;font-weight:bold;cursor:pointer;padding:8px 16px;border-radius:8px;font-family:'Cairo',sans-serif;}

/* Info sections */
section.info{background:var(--card);border:1px solid var(--line);border-radius:18px;padding:20px;margin-bottom:20px}
section.info h2{font-size:1.3rem;margin-bottom:10px}
.open{display:inline-block;margin-top:8px;padding:2px 12px;border-radius:999px;font-size:.9rem;font-weight:600}
.open.yes{background:#143d22;color:#5be08b}
.open.no{background:#40161a;color:#ff7b86}
.review-form{display:flex;flex-direction:column;gap:10px;margin-top:10px}
.review-form input,.review-form textarea{background:var(--bg);border:1px solid var(--line);color:var(--text);border-radius:12px;padding:10px 12px;font:inherit}
.stars{display:flex;gap:4px;font-size:1.6rem;cursor:pointer;color:#555;direction:ltr;justify-content:flex-end}
.stars span.on{color:var(--accent)}
.reviews{margin-top:16px;display:grid;gap:10px}
.review{background:var(--bg);border:1px solid var(--line);border-radius:12px;padding:10px 14px}
.review b{color:var(--accent)}
.empty{color:var(--muted)}
footer{text-align:center;color:var(--muted);padding:24px 16px 40px;font-size:.9rem}

@media (prefers-reduced-motion:no-preference){.btn{transition:transform .15s}.btn:hover{transform:translateY(-2px)}}
</style>
</head>
<body id="bodyTag">

<header class="hero">
  <h1>فروج وتوم</h1>
  <p>طعم ولا أطيب… وجبة بتستاهل</p>
  <div class="actions">
    <a class="btn wa" id="waBtn" href="#" target="_blank" rel="noopener">اطلب عبر واتساب</a>
    <a class="btn" href="tel:+96176195012" dir="ltr">76 195 012</a>
    <a class="btn" id="mapBtn" href="#" target="_blank" rel="noopener">الاتجاهات</a>
  </div>
</header>

<main class="wrap">
  <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 24px;">
    <div>
      <h2 class="menu-title" style="margin:0;">🍗 المنيو</h2>
    </div>
    <!-- زر خاص للإدارة مخفي عن الزبائن العاديين -->
    
  </div>
  <p class="sub">فروج على الفحم وساندويشات ووجبات ومقبلات ومشروبات. البابلية والجوّار</p>

  <div id="menu"></div>

  <section class="info">
    <h2>ساعات العمل</h2>
    <p>كل يوم من 11:00 صباحًا حتى 11:00 مساءً</p>
    <span class="open" id="openState"></span>
  </section>

  <section class="info">
    <h2>آراء الزبائن</h2>
    <p class="sub" style="margin:0">شاركنا رأيك 👇</p>
    <form class="review-form" id="reviewForm">
      <input id="rName" placeholder="الاسم" maxlength="40" required>
      <div class="stars" id="stars" role="radiogroup" aria-label="التقييم"></div>
      <textarea id="rText" rows="3" placeholder="اكتب رأيك" maxlength="300" required></textarea>
      <button class="btn" type="submit">أرسل تقييمك</button>
    </form>
    <div class="reviews" id="reviews"></div>
  </section>

  <section class="info">
    <h2>موقعنا</h2>
    <p>البابلية والجوّار — جنوب لبنان</p>
    <div class="actions" style="justify-content:flex-start;margin-top:12px">
      <a class="btn" id="mapBtn2" href="#" target="_blank" rel="noopener">الاتجاهات</a>
    </div>
  </section>

  <section class="info">
    <h2>اتصل بنا</h2>
    <p>فروج وتوم — البابلية والجوّار<br>للطلب والاستفسار: <span dir="ltr">76 195 012</span></p>
    <div class="actions" style="justify-content:flex-start;margin-top:12px">
      <a class="btn wa" id="waBtn2" href="#" target="_blank" rel="noopener">اطلب عبر واتساب</a>
      <a class="btn" href="tel:+96176195012">اتصال</a>
    </div>
  </section>
</main>

<footer>© فروج وتوم</footer>

<script>
const PHONE = "96176195012";
const LAT = 33.4193255, LNG = 35.3281368;
const OPEN_HOUR = 11, CLOSE_HOUR = 23;

/* القائمة الافتراضية */
const defaultMenu = [
  {title:"فروج على الفحم", image:"image/WhatsApp Image 2026-10-27 at 6.46.34 PM.jpeg", items:[
    ["فروج كامل عالفحم","",16.6],
    ["نصف فروج صدر","Half Chicken BBQ - Breast",8.8],
    ["نصف فروج صدر مشوي","Half Chicken BBQ - Breast",10],
    ["نصف فروج فخاد مشوي","Half Chicken BBQ - Thighs",7.3],
    ["صحن طاووق 3 سياخ مع بطاطا","",9]]},
  {title:"ساندويش عالفحم", image:"image/39d53eb3-74df-4d8f-a1d2-442e861f671f.jfif", items:[
    ["دجاج عالفحم","Grilled Chicken - Medium",3.9],
    ["دجاج عالفحم كبير","Grilled Chicken - Large",5.5],
    ["طاووق","Taouk",3.9],
    ["طاووق كبير","Taouk - Large",5.5],
    ["بطاطا","Fries Sandwich",2.8],
    ["لحمة شقف وسط","Shekaf BBQ Sandwich",3.9],
    ["لحمة شقف كبير","Shekaf BBQ Sandwich - Large",6.6],
    ["كفتة وسط","Kafta Lebanese Sandwich",3.9],
    ["كفتة كبير","Kafta Lebanese Sandwich - Large",6.1]]},
  {title:"ساندويش فرنجّي", image:"image/Gemini_Generated_Image_6mupxc6mupxc6mup.jfif", items:[
    ["فاهيتا","Fajita",5],
    ["تشيكن ساب","Chicken Sub Sandwich",5],
    ["كريسي بفالو ساندويش","Crispy Buffalo Sandwich",5],
    ["كريسي باربكيو ساندويش","Crispy BBQ Sandwich",5],
    ["كريسي وبطاطا","Regular Crispy Sandwich",5]]},
  {title:"وجبات فروج وتوم", image:"image/Gemini_Generated_Image_peh1akpeh1akpeh1.jfif", items:[
    ["وجبة ساندويش دجاج عالفحم كبير","Chicken Sandwich Meal",8],
    ["وجبة ساندويش طاووق كبير","Taouk Sandwich Meal",8],
    ["وجبة فرنجّي","French Sandwich Meal",7],
    ["وجبة دجاج كريسي 5 قطع","Crispy Meal 5 pcs",10],
    ["وجبة دجاج كريسي 3 قطع","Crispy Meal 3 pcs",6.6],
    ["وجبة زنجر 5 قطع","Zinger Meal 5 pcs",10],
    ["وجبة زنجر 3 قطع","Zinger Meal 3 pcs",6.6],
    ["وجبة أطفال (كريسي، بطاطا، مشروب)","",6.6]]},
  {title:"مقبلات وإضافات", image:"image/Gemini_Generated_Image_mgu7f8mgu7f8mgu7 (1).jfif", items:[
    ["حمص طحينة","",2.5],["كبة لحمة 5 حبات","",4.4],
    ["سلطة ملفوف (كولسلو)","",2.2],["رقاقات جبنة 5 حبات","",3],
    ["علبة بطاطا صغير","",2.2],["علبة بطاطا كبير","",3.9],
    ["توم صوص (أبيض / حار)","",1.1],["باربكيو صوص","",1.1],["تشيلي صوص","",1.1]]},
  {title:"المشروبات", image:"image/8403c53f-55b8-44bb-b78c-b4857e89a42d.jpg", items:[
    ["مشروبات غازية 330 مل","",0.9],["مشروبات غازية 1.25 ليتر","",1.8],
    ["مياه معدنية - صغير 0.5 ليتر","",0.55],["لبن عيران","",0.9]]}
];

let MENU = JSON.parse(localStorage.getItem("custom_menu")) || defaultMenu;

function saveMenu() {
    localStorage.setItem("custom_menu", JSON.stringify(MENU));
    renderMenu();
}

const fmt = n => "$" + Number(n).toFixed(2);

/* ===== رسم المنيو (يظهر للزبون والآدمن) ===== */
function renderMenu() {
    document.getElementById("menu").innerHTML = MENU.map((c, cIndex) => `
      <article class="cat">
        <div class="cat-img" ${c.image ? `style="background-image:url('${c.image}')"` : ""}><h3>${c.title}</h3></div>
        <ul class="items">
            ${c.items.map(([n, en, p], iIndex) => `
                <li>
                    <div class="item-info">
                        <div>
                            <span class="name">${n}</span>
                            ${en ? `<span class="en">${en}</span>` : ""}
                        </div>
                    </div>
                    <div style="display:flex; align-items:center; gap:10px;">
                        <span class="price">${fmt(p)}</span>
                        <!-- زر الحذف يظهر فقط للآدمن -->
                        <button class="btn danger admin-only-btn" onclick="deleteItem(${cIndex}, ${iIndex})">حذف</button>
                    </div>
                </li>
            `).join("")}
        </ul>
        
        <!-- نموذج الإضافة يظهر فقط للآدمن -->
        <div class="add-item-form">
            <span style="font-size:0.85rem; font-weight:bold; color:var(--accent);">+ إضافة وجبة جديدة لهذا القسم</span>
            <input type="text" id="name_${cIndex}" placeholder="اسم الوجبة (عربي)" required>
            <div class="add-item-row">
                <input type="text" id="en_${cIndex}" placeholder="الوصف بالإنكليزي (اختياري)">
                <input type="number" step="0.1" id="price_${cIndex}" placeholder="السعر ($)" style="max-width: 100px;" required>
                <button class="btn-add" onclick="addItem(${cIndex})">إضافة</button>
            </div>
        </div>
      </article>`).join("");
}

/* تفعيل وضع الآدمن لكشف حقول الإضافة والحذف */
function toggleAdminMode() {
    const body = document.getElementById("bodyTag");
    const isAdmin = body.classList.toggle("admin-mode");
    if(isAdmin) {
        alert("تم الدخول إلى وضع الإدارة (Admin). يمكنك الآن إضافة أو حذف الأطباق والأسعار.");
    }
}

/* إضافة عنصر جديد */
function addItem(cIndex) {
    const nameInput = document.getElementById(`name_${cIndex}`);
    const enInput = document.getElementById(`en_${cIndex}`);
    const priceInput = document.getElementById(`price_${cIndex}`);

    const name = nameInput.value.trim();
    const en = enInput.value.trim();
    const price = parseFloat(priceInput.value);

    if (!name || isNaN(price)) {
        alert("الرجاء إدخال اسم الوجبة والسعر بشكل صحيح!");
        return;
    }

    MENU[cIndex].items.push([name, en, price]);
    saveMenu();
}

/* حذف عنصر */
function deleteItem(cIndex, iIndex) {
    if (confirm("متأكد بدك تحذف هاي الوجبة؟")) {
        MENU[cIndex].items.splice(iIndex, 1);
        saveMenu();
    }
}

renderMenu();

/* ===== روابط واتساب والخريطة ===== */
const wa = `https://wa.me/${PHONE}?text=${encodeURIComponent("مرحبا، بدي أطلب")}`;
const map = `https://www.google.com/maps/dir/?api=1&destination=${LAT},${LNG}`;
["waBtn","waBtn2"].forEach(id => document.getElementById(id).href = wa);
["mapBtn","mapBtn2"].forEach(id => document.getElementById(id).href = map);

/* ===== مفتوح الآن / مغلق ===== */
(function(){
  const h = new Date().getHours();
  const isOpen = h >= OPEN_HOUR && h < CLOSE_HOUR;
  const el = document.getElementById("openState");
  el.textContent = isOpen ? "مفتوح الآن" : "مغلق حاليًا";
  el.className = "open " + (isOpen ? "yes" : "no");
})();

/* ===== آراء الزبائن ===== */
let rating = 5;
const starsEl = document.getElementById("stars");
function drawStars(){
  starsEl.innerHTML = [1,2,3,4,5].map(i =>
    `<span class="${i<=rating?'on':''}" data-v="${i}" role="radio" aria-checked="${i===rating}">★</span>`).join("");
}
starsEl.addEventListener("click", e => { const v = e.target.dataset.v; if(v){ rating = +v; drawStars(); } });
drawStars();

function load(){ try{ return JSON.parse(localStorage.getItem("reviews")||"[]"); }catch(e){ return []; } }
function save(a){ try{ localStorage.setItem("reviews", JSON.stringify(a)); }catch(e){} }
function esc(s){ return s.replace(/[&<>"']/g, m => ({"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;"}[m])); }
function showReviews(){
  const list = load();
  document.getElementById("reviews").innerHTML = list.length
    ? list.map(r => `<div class="review"><b>${"★".repeat(r.s)}</b> ${esc(r.n)}<br>${esc(r.t)}</div>`).join("")
    : '<p class="empty">لا توجد آراء بعد. كن أول من يقيّم.</p>';
}
document.getElementById("reviewForm").addEventListener("submit", e => {
  e.preventDefault();
  const list = load();
  list.unshift({n:rName.value.trim(), t:rText.value.trim(), s:rating});
  save(list.slice(0,30));
  e.target.reset(); rating = 5; drawStars(); showReviews();
});
showReviews();
</script>
</body>
</html>