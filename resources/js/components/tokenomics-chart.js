document.addEventListener('DOMContentLoaded', () => {
    const canvasElement = document.getElementById('tokenomicsChart');
    if (!canvasElement) return;

    const ctx = canvasElement.getContext('2d');

    function getLegendPosition() {
        return window.innerWidth < 992 ? 'bottom' : 'left';
    }

    // Total supply
    const totalSupply = 965558147;

    // Dynamic values (UCO)
    const values = [
        105925793.85319834, // Network Funding
        230959796.34351422, // Adoption Rewards
        145577945.60345716, // Team & Advisors
        169941.42376067,    // Staking Rewards
        18548790.55359297,  // Exchange Liquidity
        34441857,           // Gamification & Geo Incentives
        21286235.70058941   // Foundation
    ];

    // Labels
    const baseLabels = [
        'Network Funding',
        'Adoption Rewards',
        'Team & Advisors',
        'Staking Rewards',
        'Exchange Liquidity',
        'Gamification & Geo Incentives',
        'Foundation'
    ];

    // Calculate percentages (rounded)
    const percentages = values.map(value => ((value / totalSupply) * 100).toFixed(2));

    // Add Circulating Supply
    const circulatingSupply = totalSupply - values.reduce((a, b) => a + b, 0);
    const circulatingPercentage = ((circulatingSupply / totalSupply) * 100).toFixed(2);

    // Labels with percentages
    const labels = [
        `1. Circulating Supply (${circulatingPercentage}%)`,
        ...baseLabels.map((label, index) => `${index + 2}. ${label} (${percentages[index]}%)`)
    ];

    // Data for the chart
    const data = [
        parseFloat(circulatingPercentage),
        ...percentages.map(percentage => parseFloat(percentage))
    ];

    // Colors for the chart
    const backgroundColors = [
        'rgba(149, 0, 255, 0.8)',  // Circulating Supply
        'rgba(59, 15, 189, 0.8)',  // Network Funding
        'rgba(77, 26, 214, 0.8)',  // Adoption Rewards
        'rgba(93, 37, 238, 0.8)',  // Team & Advisors
        'rgba(74, 0, 186, 0.8)',   // Staking Rewards
        'rgba(63, 0, 168, 0.8)',   // Exchange Liquidity
        'rgba(56, 19, 190, 0.8)',  // Gamification & Geo Incentives
        'rgba(42, 10, 165, 0.8)'   // Foundation
    ];

    const config = {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: backgroundColors,
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '65%',
            plugins: {
                legend: {
                    display: true,
                    position: getLegendPosition(),
                    labels: {
                        usePointStyle: true,
                        color: '#FFFFFF',
                        boxWidth: 20,
                        padding: 16,
                        font: {
                            size: 14,
                            weight: 'bold'
                        }
                    }
                },
                tooltip: {
                    callbacks: {
                        title: (context) => context[0].label, // Show full label
                        label: (context) => null // Removes additional "Value: ..." text
                    }
                },
                datalabels: {
                    color: '#FFFFFF',
                    font: {
                        size: 12,
                        weight: 'bold'
                    },
                    formatter: (value, context) => {
                        const percentage = data[context.dataIndex];
                        return `${context.dataIndex + 1}: ${percentage.toFixed(2)}%`;  // Add ':' between number and percentage
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const tokenomicsChart = new Chart(ctx, config);

    window.addEventListener('resize', () => {
        const newPosition = getLegendPosition();
        if (tokenomicsChart.options.plugins.legend.position !== newPosition) {
            tokenomicsChart.options.plugins.legend.position = newPosition;
            tokenomicsChart.update();
        }
    });
});