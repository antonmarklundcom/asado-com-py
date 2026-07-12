import Link from "next/link";
import { site } from "@/content/site";
import { services } from "@/content/services";

export function Footer() {
  return (
    <footer className="border-t border-crema/10 bg-carbon px-6 py-12 text-crema sm:px-10">
      <div className="mx-auto grid max-w-6xl gap-10 sm:grid-cols-3">
        <div>
          <p className="font-display text-lg font-semibold">{site.name}</p>
          <p className="mt-2 text-sm text-crema/70">{site.tagline}</p>
        </div>
        <div>
          <p className="text-sm font-medium text-crema/90">Servicios</p>
          <ul className="mt-3 space-y-2 text-sm text-crema/70">
            {services.map((s) => (
              <li key={s.id}>
                <Link href={s.href} className="transition-colors hover:text-fuego">
                  {s.title}
                </Link>
              </li>
            ))}
          </ul>
        </div>
        <div>
          <p className="text-sm font-medium text-crema/90">Contacto</p>
          <ul className="mt-3 space-y-2 text-sm text-crema/70">
            <li>
              <Link href="/zonas-de-cobertura" className="transition-colors hover:text-fuego">
                Zonas de cobertura
              </Link>
            </li>
            <li>
              <Link href="/contacto" className="transition-colors hover:text-fuego">
                Contacto
              </Link>
            </li>
            <li>{site.email}</li>
          </ul>
        </div>
      </div>
      <p className="mx-auto mt-10 max-w-6xl text-xs text-crema/40">
        © {new Date().getFullYear()} {site.domain} — Asunción, Paraguay.
      </p>
    </footer>
  );
}
