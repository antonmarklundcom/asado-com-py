import Link from "next/link";
import { site } from "@/content/site";
import { services } from "@/content/services";
import { waLink } from "@/lib/whatsapp";

export function Header() {
  return (
    <header className="absolute inset-x-0 top-0 z-40 flex items-center justify-between px-6 py-5 sm:px-10">
      <Link href="/" className="font-display text-xl font-semibold tracking-tight text-crema">
        {site.name}
      </Link>
      <nav className="hidden items-center gap-6 text-sm text-crema/90 md:flex">
        {services.map((s) => (
          <Link key={s.id} href={s.href} className="transition-colors hover:text-fuego">
            {s.eyebrow}
          </Link>
        ))}
        <Link href="/zonas-de-cobertura" className="transition-colors hover:text-fuego">
          Zonas
        </Link>
      </nav>
      <a
        href={waLink("Hola! Quiero hacer una consulta.")}
        target="_blank"
        rel="noopener noreferrer"
        className="rounded-full bg-whatsapp px-4 py-2 text-sm font-medium text-white transition-transform hover:scale-105"
      >
        WhatsApp
      </a>
    </header>
  );
}
