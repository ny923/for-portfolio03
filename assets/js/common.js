// modal
// 複数のモーダルと開くボタンを取得
const openButtons = document.querySelectorAll('.js-modal-open');

openButtons.forEach((openBtn) => {
    openBtn.addEventListener('click', () => {
        // ボタンに対応するモーダルを取得
        const modal = openBtn
            .closest('.js-modal-wrapper')
            .querySelector('.js-modal');
        modal.classList.add('is-active');

        // モーダルの外側クリックで閉じる
        const modalOut = (e) => {
            if (e.target === modal) {
                modal.classList.remove('is-active');
                modal.removeEventListener('click', modalOut); // イベントを解除
            }
        };
        modal.addEventListener('click', modalOut);
    });
});

// ソートのvalueが空なら処理しない様にする
function submitSortForm(currentSelect) {
    // 1. 値が空（ラベル項目）を選択した場合は、何もしないで終了
    if (!currentSelect.value) {
        return;
    }

    // 2. 現在のURLのsortパラメータと同じ値なら、リロードの必要がないので終了
    const urlParams = new URLSearchParams(window.location.search);
    if (currentSelect.value === urlParams.get('sort')) {
        return;
    }

    // 全てのソート用セレクトボックスを取得
    const selects = document.querySelectorAll('.js-sort-select');

    selects.forEach(select => {
        // 現在操作したもの「以外」の name を消す（URLを綺麗にするため）
        if (select !== currentSelect) {
            select.name = "";
        }
    });

    // フォームを送信
    currentSelect.form.submit();
}