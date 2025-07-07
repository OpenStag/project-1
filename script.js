// Countdown Timer for Today's Deal
const countdownElement = document.getElementById('deal-countdown');
// Set the offer end time (e.g., 24 hours from now)
const offerEndTime = new Date(Date.now() + 24 * 60 * 60 * 1000);

function updateCountdown() {
  const now = new Date();
  const diff = offerEndTime - now;
  if (diff <= 0) {
    countdownElement.textContent = 'Offer Ended';
    return;
  }
  const hours = String(Math.floor(diff / (1000 * 60 * 60))).padStart(2, '0');
  const minutes = String(Math.floor((diff / (1000 * 60)) % 60)).padStart(2, '0');
  const seconds = String(Math.floor((diff / 1000) % 60)).padStart(2, '0');
  countdownElement.textContent = `${hours}:${minutes}:${seconds}`;
}
setInterval(updateCountdown, 1000);
updateCountdown();

// Fade-in Animation on Scroll
const fadeElements = document.querySelectorAll('section');
function handleScroll() {
  fadeElements.forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 60) {
      el.style.opacity = 1;
      el.style.transform = 'translateY(0)';
    }
  });
}
window.addEventListener('scroll', handleScroll);
window.addEventListener('DOMContentLoaded', () => {
  fadeElements.forEach(el => {
    el.style.opacity = 0;
    el.style.transform = 'translateY(40px)';
    el.style.transition = 'opacity 0.7s, transform 0.7s';
  });
  handleScroll();
});

// Dynamic Offer Loading
async function loadOffers() {
  try {
    const res = await fetch('offers.php');
    const offers = await res.json();
    renderOffers(offers);
  } catch (e) {
    console.error('Failed to load offers:', e);
  }
}

function renderOffers(offers) {
  // Today's Deal
  const today = offers.find(o => o.type === 'today');
  if (today) {
    const dealCard = document.querySelector('.deal-card');
    dealCard.innerHTML = `
      <img src="${today.image}" alt="${today.title}" class="offer-img">
      <div class="deal-info">
        <h3>Limited Time Offer<br>${today.title}</h3>
        <p>${today.description}</p>
        <button class="cta">${today.cta}</button>
        <div class="countdown" id="deal-countdown">00:00:00</div>
      </div>
    `;
    // Re-attach countdown
    const countdownElement = document.getElementById('deal-countdown');
    setInterval(updateCountdown, 1000);
    updateCountdown();
  }
  // Bundle Offers
  const bundles = offers.filter(o => o.type === 'bundle');
  const bundlesContainer = document.querySelector('.bundles');
  if (bundlesContainer) {
    bundlesContainer.innerHTML = '';
    bundles.forEach(bundle => {
      const div = document.createElement('div');
      div.className = 'bundle-card offer-card';
      div.innerHTML = `
        <img src="${bundle.image}" alt="${bundle.title}" class="offer-img">
        <h3>${bundle.title}</h3>
        <p>${bundle.description}</p>
        <button class="cta">${bundle.cta}</button>
      `;
      bundlesContainer.appendChild(div);
    });
  }
  // Clearance Sale
  const clearance = offers.filter(o => o.type === 'clearance');
  const clearanceContainer = document.querySelector('.clearance-items');
  if (clearanceContainer) {
    clearanceContainer.innerHTML = '';
    clearance.forEach(item => {
      const div = document.createElement('div');
      div.className = 'clearance-card offer-card';
      div.innerHTML = `
        <img src="${item.image}" alt="${item.title}" class="offer-img">
        <h3>${item.title}</h3>
        <p>${item.description}</p>
        <button class="cta">${item.cta}</button>
      `;
      clearanceContainer.appendChild(div);
    });
  }
  // Special Discounts
  const discounts = offers.filter(o => o.type === 'discount');
  const discountContainer = document.querySelector('.discount-cards');
  if (discountContainer) {
    discountContainer.innerHTML = '';
    discounts.forEach(discount => {
      const div = document.createElement('div');
      div.className = 'discount-card offer-card';
      div.innerHTML = `
        <img src="${discount.image}" alt="${discount.title}" class="offer-img">
        <h3>${discount.title}</h3>
        <p>${discount.description}</p>
        <button class="verify-btn">${discount.cta}</button>
      `;
      discountContainer.appendChild(div);
    });
  }
  addOfferCardInteractivity();
}

// Add hover effects and smooth image transitions
function addOfferCardInteractivity() {
  document.querySelectorAll('.offer-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-6px) scale(1.04)';
      card.style.boxShadow = '0 8px 32px rgba(90,187,219,0.18)';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
      card.style.boxShadow = '';
    });
  });
  document.querySelectorAll('.offer-img').forEach(img => {
    img.style.transition = 'transform 0.4s, box-shadow 0.4s';
    img.addEventListener('mouseenter', () => {
      img.style.transform = 'scale(1.07)';
      img.style.boxShadow = '0 4px 24px #5ABBDB44';
    });
    img.addEventListener('mouseleave', () => {
      img.style.transform = '';
      img.style.boxShadow = '';
    });
  });
}

window.addEventListener('DOMContentLoaded', loadOffers); 