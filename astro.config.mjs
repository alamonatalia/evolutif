// @ts-check
import { defineConfig } from 'astro/config';

import tailwindcss from '@tailwindcss/vite';

// https://astro.build/config
export default defineConfig({
  site: 'https://alamonatalia.github.io/evolutif/',
  base: '/evolutif/',

  vite: {
    plugins: [tailwindcss()]
  }
});