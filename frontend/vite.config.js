import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path'   // 👈 ESTA LINHA FALTAVA

export default defineConfig({
  plugins: [vue()],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src')
    }
  },
  server: {
    host: true,
    port: 5173
  }
})
