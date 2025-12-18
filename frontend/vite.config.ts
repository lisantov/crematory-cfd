import { fileURLToPath, URL } from 'node:url'
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  server: {
    host: 'localhost',
    port: 5173,
    strictPort: true,

    hmr: false,

    watch: {
      usePolling: true,
      interval: 1000,
    },

    proxy: {
      '/api': {
        target: 'http://localhost:9000',
        changeOrigin: true,
        secure: false,
      },

      '/sanctum': {
        target: 'http://localhost:9000',
        changeOrigin: true,
        secure: false,
      },

      '/storage': {
        target: 'http://localhost:9000',
        changeOrigin: true,
        secure: false,
      },

      '/ws': {
        target: 'ws://localhost:9000',
        ws: true,
        changeOrigin: true,
      },

      '^/backend/.*': {
        target: 'http://localhost:9000',
        changeOrigin: true,
        secure: false,
        rewrite: (path) => path.replace(/^\/backend/, ''),
      },
    },
  },

  plugins: [vue()],

  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url)),
      '@shared-ui': fileURLToPath(new URL('./src/shared/ui', import.meta.url)),
      '@styles': fileURLToPath(new URL('./src/app/assets/styles', import.meta.url)),
      '@fonts': fileURLToPath(new URL('./src/app/assets/styles', import.meta.url))
    },
  },

  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@use "@styles/_variables.scss" as *; @use "@styles/_mixins.scss" as *;`
      }
    }
  }
})
