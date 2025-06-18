document.addEventListener('DOMContentLoaded', () => {


    {


        const canvasElement = document.getElementById('tokenomicsChart');
        if (!canvasElement) return;

        const ctx = canvasElement.getContext('2d');

        function getLegendPosition() {
            return window.innerWidth < 992 ? 'bottom' : 'left';
        }

        // Total supply
        //const totalSupply = 965558147;
        const totalSupply = 1000000000;

        // Dynamic values (UCO)
        const values = [
            381966011, // Network Funding
            236067977, // Adoption Rewards
            145898033, // Team & Advisors
            90169943,    // Staking Rewards
            55728090,  // Exchange Liquidity
            34441857,           // Gamification & Geo Incentives
            21286236,// Foundation
            34441853  // Miners
        ];

        // Labels
        const baseLabels = [
            'Network Funding',
            'Adoption Rewards',
            'Team & Advisors',
            'Staking Rewards',
            'Exchange Liquidity',
            'Gamification & Geo Incentives',
            'Foundation',
            'Miner Rewards'
        ];

        // Calculate percentages (rounded)
        const percentages = values.map(value => ((value / totalSupply) * 100).toFixed(2));

        // Add Circulating Supply
        const circulatingSupply = totalSupply - values.reduce((a, b) => a + b, 0);
        const circulatingPercentage = ((circulatingSupply / totalSupply) * 100).toFixed(2);

        // Labels with percentages
        const labels = [
            //  `1. Circulating Supply (${circulatingPercentage}%)`,
            ...baseLabels.map((label, index) => `${index + 1}. ${label} (${percentages[index]}%)`)
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

    }










    {


        const canvasElement = document.getElementById('tokenomicsChartStatus');
        if (!canvasElement) return;

        const ctx = canvasElement.getContext('2d');

        function getLegendPosition() {
            return window.innerWidth < 992 ? 'bottom' : 'left';
        }

        const consumed = [
            97939086,
            230732790,
            145577945,
            169941,
            18548790,
            34441857,
            21286236
        ];

        const total = [
            381966011,
            236067977,
            145898033,
            90169943,
            55728090,
            34441857,
            21286236
        ];
        // Labels
        const labels = [
            'Network Funding',
            'Adoption Rewards',
            'Team & Advisors',
            'Staking Rewards',
            'Exchange Liquidity',
            'Gamification & Geo Incentives',
            'Foundation'
        ];

        // Calculate percentages (rounded)
        const consumptionPercent = consumed.map((value, index) => ((value / total[index]) * 100).toFixed(2));



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
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Consumption (%)',
                    data: consumptionPercent,
                    backgroundColor: backgroundColors,
                    borderWidth: 0
                }]
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: {
                        beginAtZero: true,
                        max: 100,

                        ticks: {
                            color: '#FFFFFF',
                            stepSize: 10, // Affiche tous les 10%
                            callback: (value) => `${value}%`,
                            font: {
                                weight: 'bold',
                                size: 14
                            }
                        },
                        title: {
                            display: false // Retire le titre de l’axe X
                        }
                    },
                    y: {
                        ticks: {
                            color: '#FFFFFF',
                            font: {
                                weight: 'bold',
                                size: 14
                            }
                        }
                    }
                },
                plugins: {


                    tooltip: {
                        callbacks: {
                            title: (context) => context[0].label + ` - ${context.parsed.x}%`, // Show full label
                            label: (context) => null // Removes additional "Value: ..." text
                        }
                    },
                    datalabels: {
                        color: '#FFFFFF',
                        font: {
                            size: 14,
                            weight: 'bold'
                        },
                        formatter: (value, context) => {
                            const percentage = data[context.dataIndex];
                            return `${context.dataIndex + 1}: ${percentage.toFixed(2)}%`;  // Add ':' between number and percentage
                        }
                    },
                    legend: {
                        display: false // Supprime la légende (optionnelle si non utilisée)
                    }
                }
            }

        };

        const tokenomicsChart = new Chart(ctx, config);

        window.addEventListener('resize', () => {
            const newPosition = getLegendPosition();
            if (tokenomicsChart.options.plugins.legend.position !== newPosition) {
                tokenomicsChart.options.plugins.legend.position = newPosition;
                tokenomicsChart.update();
            }
        });

    }






















});