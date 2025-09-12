self.addEventListener('install', event => {
  event.waitUntil(
    caches.open('la87-cache').then(cache => {
      return cache.addAll([
        '/',
        '/index.html',
        '/style.css',
        '/app.js',
        '/assets/laprimera_logo_trans512.png'
      ]);
    })
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    })
  );
});
