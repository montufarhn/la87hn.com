document.addEventListener('DOMContentLoaded', function () {
  const isAndroid = /Android/i.test(navigator.userAgent);

  if (isAndroid && !localStorage.getItem('androidPopupDismissed')) {
    const popup = document.createElement('div');
    popup.innerHTML = `
      <div id="android-popup" style="
        position: fixed;
        bottom: -150px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #00924c;
        color: white;
        padding: 1.2rem;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        z-index: 9999;
        max-width: 90%;
        text-align: center;
        font-family: 'Open Sans', sans-serif;
        opacity: 0;
        transition: all 0.6s ease;
      ">
        📱 ¡Escucha <strong>La 87</strong> con nuestra App para Android!<br/>
        <a href="https://play.google.com/store/apps/details?id=com.la87hn.la87laprimera" target="_blank" style="color: #ffb000; font-weight: bold; display: inline-block; margin-top: 0.8rem;">
          Descargar ahora desde Google Play
        </a><br/>
        <button style="
          margin-top: 10px;
          background: transparent;
          border: none;
          color: white;
          font-size: 0.9rem;
          text-decoration: underline;
          cursor: pointer;
        ">No mostrar de nuevo</button>
      </div>
    `;

    const popupBox = popup.querySelector('#android-popup');
    const dismissButton = popup.querySelector('button');

    dismissButton.addEventListener('click', () => {
      localStorage.setItem('androidPopupDismissed', 'true');
      popup.remove();
    });

    document.body.appendChild(popup);

    // Mostrar el popup con animación
    setTimeout(() => {
      popupBox.style.bottom = "20px";
      popupBox.style.opacity = "1";
    }, 300);

    // Cerrar automáticamente después de 15 segundos
    setTimeout(() => {
      if (!localStorage.getItem('androidPopupDismissed')) {
        popup.remove();
      }
    }, 15000);
  }
});
