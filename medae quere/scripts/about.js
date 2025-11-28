// About page specific JavaScript

document.addEventListener('DOMContentLoaded', function() {
    loadTeamMembers();
    loadTimeline();
    loadCoreValues();

    // Listen for language changes
    window.addEventListener('languageChanged', function() {
        // Reload team members when language changes
        loadTeamMembers();
        loadTimeline();
        loadCoreValues();
    });
});

// Load team members
function loadTeamMembers() {
    const teamMembersData = getTranslation('about.teamMembers');
    const teamMembers = [
        {
            name: 'Yves TOGUEM',
            title: teamMembersData.yves.title,
            image: '../CEO.jpg',
            bio: teamMembersData.yves.bio,
            linkedin: 'https://www.linkedin.com/in/yvestoguem/'
        },
        {
            name: 'Patrick WAMBO',
            title: teamMembersData.patrick.title,
            image: '../patrick.jpg',
            bio: teamMembersData.patrick.bio
        },
        {
            name: 'Arlette TAMBO',
            title: teamMembersData.arlette.title,
            image: '../arlette.jpg',
            bio: teamMembersData.arlette.bio
        },
        {
            name: 'Fabrice NGANMENI',
            title: teamMembersData.fabrice.title,
            image: '../fabrice.jpg',
            bio: teamMembersData.fabrice.bio,
            linkedin: 'https://www.linkedin.com/in/fabrice-luther-nganmeni-058830121/'
        },
        {
            name: 'Oriane-NGOUNOU',
            title: teamMembersData.oriane.title,
            image: '../Oriane-NGOUNOU.jpg',
            bio: teamMembersData.oriane.bio,
            linkedin: 'https://www.linkedin.com/in/oriane-ngounou-2868a4168/'
        },
        {
            name: 'Jean-jaques MODO',
            title: teamMembersData.jacques.title,
            image: '../Jean-jaque-1.jpg',
            bio: teamMembersData.jacques.bio,
            linkedin: 'https://www.linkedin.com/in/jacques-nana-455960163/'
        }
    ];

    const grid = document.getElementById('teamGrid');
    if (!grid) return;

    // Clear existing content
    grid.innerHTML = '';

    teamMembers.forEach((member, index) => {
        const card = document.createElement('div');
        card.className = `col-md-3 m-4  team-card  max-width: 1400px fade-in-up delay-${Math.min(index % 3, 5)}`;

        card.innerHTML = `
            <div class="team-image-wrapper">
                <img src="${member.image}" alt="${member.name}" class="team-image">
            </div>
            <div class="team-info">
                <h4 class="team-name">${member.name}</h4>
                <p class="team-title">${member.title}</p>
                <p class="team-bio">${member.bio}</p>
                <a href="${member.linkedin || '#'}" class="team-link" ${member.linkedin ? 'target="_blank"' : ''}>
                    ${getTranslation('about.viewProfile')}
                </a>
            </div>
        `;

        grid.appendChild(card);
    });
}

// Load timeline
function loadTimeline() {
    const timelineData = getTranslation('about.timeline');
    const timelineItems = [
        {
            year: '2015',
            title: timelineData['2015'].title,
            description: timelineData['2015'].description
        },
        {
            year: '2017',
            title: timelineData['2017'].title,
            description: timelineData['2017'].description
        },
        {
            year: '2019',
            title: timelineData['2019'].title,
            description: timelineData['2019'].description
        },
        {
            year: '2022',
            title: timelineData['2022'].title,
            description: timelineData['2022'].description
        },
        {
            year: '2023',
            title: timelineData['2023'].title,
            description: timelineData['2023'].description
        },
        {
            year: '2024',
            title: timelineData['2024'].title,
            description: timelineData['2024'].description
        }
    ];

    const timeline = document.getElementById('timeline');
    if (!timeline) return;

    // Clear existing content
    timeline.innerHTML = '';

    timelineItems.forEach((item, index) => {
        const timelineItem = document.createElement('div');
        timelineItem.className = `timeline-item fade-in-left delay-${Math.min(index, 5)}`;

        timelineItem.innerHTML = `
            <div class="timeline-dot"></div>
            <div class="timeline-year">${item.year}</div>
            <h3 class="timeline-title">${item.title}</h3>
            <p class="timeline-description">${item.description}</p>
        `;

        timeline.appendChild(timelineItem);
    });
}

// Load core values
function loadCoreValues() {
    const valuesData = getTranslation('about.values');
    const values = [
        {
            icon: `<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>`,
            title: valuesData.innovation.title,
            description: valuesData.innovation.description
        },
        {
            icon: `<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>`,
            title: valuesData.integrity.title,
            description: valuesData.integrity.description
        },
        {
            icon: `<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>`,
            title: valuesData.excellence.title,
            description: valuesData.excellence.description
        },
        {
            icon: `<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>`,
            title: valuesData.collaboration.title,
            description: valuesData.collaboration.description
        },
        {
            icon: `<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 11 12 14 22 4"/>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>
            </svg>`,
            title: valuesData.accountability.title,
            description: valuesData.accountability.description
        },
        {
            icon: `<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>`,
            title: valuesData.adaptability.title,
            description: valuesData.adaptability.description
        }
    ];

    const grid = document.getElementById('valuesGrid');
    if (!grid) return;

    // Clear existing content
    grid.innerHTML = '';

    values.forEach((value, index) => {
        const card = document.createElement('div');
        card.className = `col-lg-12 col-md-12 col-sm-12 value-card fade-in-up delay-${Math.min(index % 3, 5)}`;

        card.innerHTML = `
            <div class="value-icon">${value.icon}</div>
            <h3>${value.title}</h3>
            <p>${value.description}</p>
        `;

        grid.appendChild(card);
    });

    // Update section header
    const valuesTitle = document.querySelector('.values-section .section-header h2');
    if (valuesTitle) valuesTitle.textContent = getTranslation('about.valuesTitle');

    const valuesDesc = document.querySelector('.values-section .section-header p');
    if (valuesDesc) valuesDesc.textContent = getTranslation('about.valuesDesc');
}
