// News page specific JavaScript

let newsArticles = [];
let filteredArticles = [];



function loadNewsFallback() {
    const articles = getTranslation('news.articles');
    const categories = getTranslation('news.categories');

    newsArticles = Object.keys(articles).map(id => {
        const article = articles[id];
        const imageMap = {
            '1': 'top.jpeg',
            '2': 'lab.jpeg',
            '3': 'imag.jpg',
            '4': 'forth.jpeg',
            '5': 'fifth.jpeg',
            '6': 'sisth.jpeg',
            '7': 'seven.jpeg',
            '8': 'eigth.jpeg'
        };
        return {
            id: id,
            title: article.title,
            excerpt: article.excerpt,
            image: `../${imageMap[id] || `${id}.jpeg`}`,
            category: categories[article.category],
            date: id === '1' ? '2024-04-05' :
                  id === '2' ? '2023-01-21' :
                  id === '3' ? '2023-01-21' :
                  id === '4' ? '2024-09-28' :
                  id === '5' ? '2024-09-25' :
                  id === '6' ? '2024-09-20' :
                  id === '7' ? '2024-09-15' :
                  id === '8' ? '2024-09-10' : '2024-01-01'
        };
    });

    filteredArticles = [...newsArticles];
}

function setupFilters() {
    const filterContainer = document.getElementById('newsFilters');
    if (!filterContainer) return;

    const categories = getTranslation('news.categories');
    const allCategories = ['all', ...Object.keys(categories)];

    filterContainer.innerHTML = '';

    allCategories.forEach(cat => {
        const button = document.createElement('button');
        button.className = `filter-btn ${cat === 'all' ? 'active' : ''}`;
        button.textContent = cat === 'all' ? getTranslation('news.allCategories') || 'All' : categories[cat];
        button.dataset.category = cat;
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            filterArticles(this.dataset.category);
        });
        filterContainer.appendChild(button);
    });
}

function filterArticles(category) {
    if (category === 'all') {
        filteredArticles = [...newsArticles];
    } else {
        const categories = getTranslation('news.categories');
        const categoryName = categories[category];
        filteredArticles = newsArticles.filter(article => article.category === categoryName);
    }
    renderNews();
}

document.addEventListener('DOMContentLoaded', function() {
    // Load fallback data immediately to avoid delay
    loadNewsFallback();
    renderNews();
    setupFilters();
    loadDataSection();

    // Update news content when language changes
    window.addEventListener('languageChanged', function() {
        loadNewsFallback();
        renderNews();
        setupFilters();
    });
});

function renderNews() {
    const grid = document.getElementById('newsGrid');
    const noResults = document.getElementById('noResults');
    
    if (!grid) return;

    grid.innerHTML = '';

    if (filteredArticles.length === 0) {
        noResults.style.display = 'block';
        return;
    }

    noResults.style.display = 'none';

    filteredArticles.forEach((article, index) => {
        const card = document.createElement('article');
        card.className = `news-card fade-in-up delay-${Math.min(index % 3, 5)}`;
        
        const date = new Date(article.date).toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });

        card.innerHTML = `
            <div class="news-image-wrapper">
                <img src="${article.image}" alt="${article.title}" class="news-image">
            </div>
            <div class="news-content">
                <div class="news-meta">
                    <div style="display: flex; align-items: center; gap: 0.25rem;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        <span>${date}</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.25rem;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                            <line x1="7" y1="7" x2="7.01" y2="7"/>
                        </svg>
                        <span class="news-category">${article.category}</span>
                    </div>
                </div>
                <h3 class="news-title">${article.title}</h3>
                <p class="news-excerpt">${article.excerpt}</p>
            </div>
        `;
        
        grid.appendChild(card);
    });

    // Re-observe animations
    observeScrollAnimations();
}


