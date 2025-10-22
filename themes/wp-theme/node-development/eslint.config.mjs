import { defineConfig } from "eslint/config";
import globals from "globals";
import path from "node:path";
import { fileURLToPath } from "node:url";
import js from "@eslint/js";
import { FlatCompat } from "@eslint/eslintrc";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const compat = new FlatCompat({
    baseDirectory: __dirname,
    recommendedConfig: js.configs.recommended,
    allConfig: js.configs.all
});

export default defineConfig([{
    extends: compat.extends("eslint:recommended"),

    languageOptions: {
        globals: {
            ...globals.browser,
            Atomics: "readonly",
            SharedArrayBuffer: "readonly",
            gsap: "readonly",
            $global: "readonly",
        },

        ecmaVersion: 2020,
        sourceType: "script",

        parserOptions: {
            impliedStrict: true,
        },
    },

    rules: {
        indent: ["error", "tab"],
        "linebreak-style": ["error", "unix"],

        quotes: ["error", "single", {
            allowTemplateLiterals: true,
        }],

        semi: ["error", "always"],
    },
}]);