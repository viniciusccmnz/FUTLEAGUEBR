/**
 * Timer Manager - Sistema de gerenciamento de cronômetros independentes
 * Evita resets incorretos ao atualizar a página e mantém sincronização
 */

class TimerManager {
    constructor() {
        this.timers = {};
        this.isInitialized = false;
    }

    /**
     * Inicializa um cronômetro específico
     * @param {string} timerId - ID do cronômetro (ex: 'auto', 'penalti', 'falta', 'trilha')
     * @param {number} initialSeconds - Tempo inicial em segundos
     * @param {string} displayElementId - ID do elemento HTML para exibir o tempo
     * @param {Function} onComplete - Callback quando o cronômetro terminar
     */
    initTimer(timerId, initialSeconds, displayElementId, onComplete = null) {
        if (this.timers[timerId]) {
            clearInterval(this.timers[timerId].interval);
        }

        const timer = {
            id: timerId,
            seconds: Math.max(0, initialSeconds),
            displayElement: document.getElementById(displayElementId),
            onComplete: onComplete,
            isRunning: false,
            startTime: Date.now(),
            initialSeconds: initialSeconds
        };

        this.timers[timerId] = timer;
        this.updateDisplay(timerId);
        
        if (timer.seconds > 0) {
            this.startTimer(timerId);
        }

        return timer;
    }

    /**
     * Inicia um cronômetro
     */
    startTimer(timerId) {
        const timer = this.timers[timerId];
        if (!timer || timer.isRunning) return;

        timer.isRunning = true;
        timer.interval = setInterval(() => {
            if (timer.seconds > 0) {
                timer.seconds--;
                this.updateDisplay(timerId);
            } else {
                this.stopTimer(timerId);
                if (timer.onComplete) {
                    timer.onComplete();
                }
            }
        }, 1000);
    }

    /**
     * Para um cronômetro
     */
    stopTimer(timerId) {
        const timer = this.timers[timerId];
        if (!timer) return;

        timer.isRunning = false;
        if (timer.interval) {
            clearInterval(timer.interval);
            timer.interval = null;
        }
    }

    /**
     * Atualiza a exibição do cronômetro
     */
    updateDisplay(timerId) {
        const timer = this.timers[timerId];
        if (!timer || !timer.displayElement) return;

        const minutes = Math.floor(timer.seconds / 60);
        const seconds = timer.seconds % 60;
        timer.displayElement.innerHTML = `${minutes}:${seconds.toString().padStart(2, '0')}`;
    }

    /**
     * Pausa todos os cronômetros
     */
    pauseAll() {
        Object.keys(this.timers).forEach(timerId => {
            this.stopTimer(timerId);
        });
    }

    /**
     * Resume todos os cronômetros
     */
    resumeAll() {
        Object.keys(this.timers).forEach(timerId => {
            const timer = this.timers[timerId];
            if (timer && timer.seconds > 0 && !timer.isRunning) {
                this.startTimer(timerId);
            }
        });
    }

    /**
     * Obtém o tempo restante de um cronômetro
     */
    getRemainingTime(timerId) {
        const timer = this.timers[timerId];
        return timer ? timer.seconds : 0;
    }

    /**
     * Define o tempo de um cronômetro
     */
    setTime(timerId, seconds) {
        const timer = this.timers[timerId];
        if (!timer) return;

        const wasRunning = timer.isRunning;
        this.stopTimer(timerId);
        
        timer.seconds = Math.max(0, seconds);
        this.updateDisplay(timerId);
        
        if (wasRunning && timer.seconds > 0) {
            this.startTimer(timerId);
        }
    }

    /**
     * Sincroniza todos os cronômetros com o servidor
     */
    async syncWithServer() {
        try {
            const response = await fetch('paginas/sync_timers.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    action: 'sync',
                    timers: Object.keys(this.timers).map(timerId => ({
                        id: timerId,
                        remaining: this.getRemainingTime(timerId)
                    }))
                })
            });

            if (response.ok) {
                const data = await response.json();
                if (data.success) {
                    // Atualizar tempos se necessário
                    Object.keys(data.timers).forEach(timerId => {
                        if (this.timers[timerId]) {
                            this.setTime(timerId, data.timers[timerId]);
                        }
                    });
                }
            }
        } catch (error) {
            console.error('Erro ao sincronizar cronômetros:', error);
        }
    }

    /**
     * Inicializa todos os cronômetros baseado nos dados do PHP
     */
    initializeFromPHP() {
        if (this.isInitialized) return;

        // Cronômetro de Auto
        const tempoRestanteAuto = document.getElementById('tempo_restante_auto');
        if (tempoRestanteAuto) {
            const tempoAuto = parseInt(tempoRestanteAuto.value) || 0;
            this.initTimer('auto', tempoAuto, 'tempoa', () => {
                // Callback quando o cronômetro de auto terminar
                console.log('Cronômetro de Auto terminou');
            });
        }

        // Cronômetro de Penalti
        const tempoRestantePenalti = document.getElementById('tempo_restante_penalti');
        if (tempoRestantePenalti) {
            const tempoPenalti = parseInt(tempoRestantePenalti.value) || 0;
            this.initTimer('penalti', tempoPenalti, 'tempoa1', () => {
                // Callback quando o cronômetro de penalti terminar
                console.log('Cronômetro de Penalti terminou');
            });
        }

        // Cronômetro de Falta
        const tempoRestanteFalta = document.getElementById('tempo_restante_falta');
        if (tempoRestanteFalta) {
            const tempoFalta = parseInt(tempoRestanteFalta.value) || 0;
            this.initTimer('falta', tempoFalta, 'tempoa2', () => {
                // Callback quando o cronômetro de falta terminar
                console.log('Cronômetro de Falta terminou');
            });
        }

        // Cronômetro de Trilha
        const tempoRestanteTrilha = document.getElementById('tempo_restante_trilha');
        if (tempoRestanteTrilha) {
            const tempoTrilha = parseInt(tempoRestanteTrilha.value) || 0;
            this.initTimer('trilha', tempoTrilha, 'tempoa3', () => {
                // Callback quando o cronômetro de trilha terminar
                console.log('Cronômetro de Trilha terminou');
            });
        }

        this.isInitialized = true;
    }
}

// Instância global do gerenciador de cronômetros
window.timerManager = new TimerManager();

// Inicializar quando o DOM estiver pronto
document.addEventListener('DOMContentLoaded', () => {
    window.timerManager.initializeFromPHP();
});

// Sincronizar antes de sair da página
window.addEventListener('beforeunload', () => {
    window.timerManager.syncWithServer();
});

// Sincronizar quando a página voltar a ficar visível
document.addEventListener('visibilitychange', () => {
    if (!document.hidden) {
        window.timerManager.syncWithServer();
    }
});
