import { Chart, registerables } from 'chart.js';

Chart.register(...registerables);

let myChart = null;

function updateChart() {
    const ctx = document.getElementById('myChart').getContext('2d');
    const { price, articles, maxPrice } = data;
    let myLabels = [];
    let myData = [];
    let interval;
    let intervalMins = [];

    if (articles.data.length > 0) {
        const numLabels = Math.min(articles.data.length, 10);
        interval = maxPrice / numLabels;

        myData = new Array(numLabels).fill(0);
        intervalMins = new Array(numLabels).fill(0).map((_, i) => i * interval);

        articles.data.forEach(article => {
            for (let i = 0; i < numLabels; i++) {
                const min = i * interval;
                const max = (i + 1) * interval;

                if (article.price > min && article.price <= max) {
                    myData[i]++;
                    break;
                }
            }
        });

        const formatPrice = (value) => {
            return new Intl.NumberFormat('it-IT', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).format(value);
        };

        myLabels = myData
            .map((count, i) => (count > 0 ? `< ${formatPrice((i + 1) * interval)} €` : null))
            .filter(label => label !== null);
        myData = myData.filter(count => count > 0);
    }

    if (myChart) {
        const colors = intervalMins.map(min => ({
            backgroundColor: min > price[0] ? '#f2f2f2' : '#e6e6e6',
            borderColor: min > price[0] ? '#e6e6e6' : '#737373'
        }));
    
        myChart.data.datasets[0].backgroundColor = colors.map(color => color.backgroundColor);
        myChart.data.datasets[0].borderColor = colors.map(color => color.borderColor);
        myChart.update();
    } else {
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: myLabels,
                datasets: [{
                    data: myData,
                    backgroundColor: '#e6e6e6',
                    borderColor: '#737373',
                    borderWidth: 1,
                    label: '',
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        display: false,
                        beginAtZero: true
                    },
                    x: {
                        display: false
                    }
                }
            }
        })
    };
}

document.addEventListener('DOMContentLoaded', () => {
    updateChart();

    Livewire.on('priceUpdated', ({ price }) => {
        data.price = price;
        updateChart();
    });

    Livewire.on('filterPrice', (newPrice) => {
        data.price = newPrice;
        updateChart();
    });
});
