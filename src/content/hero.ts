/**
 * Copy + pacing for the scroll-world hero (see ASADO-PLAN.md §5.2).
 * Asset paths (still/poster/clip) are filled in during Phase 2 once the
 * Higgsfield pipeline renders and encodes the scenes — this file is the
 * copy source of truth so writing it doesn't block on the shoot.
 */

export interface HeroSection {
  id: string;
  eyebrow: string;
  title: string;
  body: string;
  tags: string[];
  accent: string;
  scroll?: number;
  linger?: number;
  // Populated in Phase 2:
  still?: string;
  poster?: string;
  clip?: string;
  clipMobile?: string;
}

export const heroSections: HeroSection[] = [
  {
    id: "estancia",
    eyebrow: "Donde empieza todo",
    title: "El mejor asado empieza en el campo.",
    body: "Seleccionamos de estancias paraguayas de confianza, a la luz del atardecer.",
    tags: ["Origen paraguayo"],
    accent: "#F5A623",
  },
  {
    id: "corte",
    eyebrow: "Cortes seleccionados",
    title: "Carne elegida como para tu propia mesa.",
    body: "Vacío, costilla, tapa cuadril: cada corte pasa por manos que saben.",
    tags: ["Selección premium"],
    accent: "#E85D26",
  },
  {
    id: "fuego",
    eyebrow: "El ritual",
    title: "Brasas a punto. Paciencia de asador.",
    body: "El fuego que transforma un corte en un asado de verdad.",
    tags: ["A las brasas"],
    accent: "#E85D26",
    scroll: 1.8,
    linger: 0.5,
  },
  {
    id: "mesa",
    eyebrow: "Lo que importa",
    title: "El asado une. Vos solo invitá.",
    body: "Amigos, familia, una mesa larga y el fuego de fondo.",
    tags: ["Momentos compartidos"],
    accent: "#7A2E2B",
  },
  {
    id: "cta",
    eyebrow: "Tu asado, resuelto",
    title: "Pedí por WhatsApp. Nosotros nos encargamos.",
    body: "Delivery de carne, parrillas y asador privado — todo en un mensaje.",
    tags: ["Delivery", "Parrillas", "Asador privado"],
    accent: "#F5A623",
    scroll: 1.6,
    linger: 0.4,
  },
];
