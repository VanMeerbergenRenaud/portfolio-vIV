<x-filament-widgets::widget>
    <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-3">
        @foreach($this->getStatsData() as $stat)
            <div class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-gradient-to-br from-white to-gray-50/50 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl dark:border-gray-700 dark:from-gray-800 dark:to-gray-900/50">
                <div class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-{{ $stat['color'] }}-500/10 blur-2xl transition-all group-hover:scale-150"></div>

                <div class="relative flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <div class="absolute inset-0 rounded-xl bg-{{ $stat['color'] }}-500 opacity-20 blur-lg"></div>
                                <div class="relative rounded-xl bg-gradient-to-br from-{{ $stat['color'] }}-400 to-{{ $stat['color'] }}-600 p-3 shadow-lg">
                                    @svg($stat['icon'], 'h-5 w-5 text-white')
                                </div>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">{{ $stat['label'] }}</p>
                                <p class="mt-1 text-3xl font-black text-gray-900 dark:text-white">{{ $stat['value'] }}</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2">
                            <div class="h-1.5 flex-1 overflow-hidden rounded-full bg-gray-200 dark:bg-gray-700">
                                <div class="h-full rounded-full bg-gradient-to-r from-{{ $stat['color'] }}-400 to-{{ $stat['color'] }}-600 transition-all duration-500" style="width: {{ min($stat['value'] * 10, 100) }}%"></div>
                            </div>
                            <p class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ $stat['description'] }}</p>
                        </div>
                    </div>

                    @if(isset($stat['trend']))
                        <div class="ml-4 h-16 w-28 opacity-60 transition-opacity group-hover:opacity-100">
                            <canvas id="trend-{{ $loop->index }}" class="h-full w-full"></canvas>
                        </div>
                        @push('scripts')
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const ctx = document.getElementById('trend-{{ $loop->index }}');
                                if (ctx) {
                                    const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 64);
                                    gradient.addColorStop(0, 'rgba(59, 130, 246, 0.3)');
                                    gradient.addColorStop(1, 'rgba(59, 130, 246, 0)');

                                    new Chart(ctx, {
                                        type: 'line',
                                        data: {
                                            labels: Array(7).fill(''),
                                            datasets: [{
                                                data: @js($stat['trend']),
                                                borderColor: 'rgb(59, 130, 246)',
                                                backgroundColor: gradient,
                                                borderWidth: 2.5,
                                                fill: true,
                                                tension: 0.4,
                                                pointRadius: 0,
                                                pointHoverRadius: 4,
                                                pointHoverBackgroundColor: 'rgb(59, 130, 246)',
                                                pointHoverBorderColor: '#fff',
                                                pointHoverBorderWidth: 2,
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                            plugins: { legend: { display: false }, tooltip: { enabled: true } },
                                            scales: {
                                                x: { display: false },
                                                y: { display: false }
                                            }
                                        }
                                    });
                                }
                            });
                        </script>
                        @endpush
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-filament-widgets::widget>

