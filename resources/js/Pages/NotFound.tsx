import { Link, usePage } from '@inertiajs/react'
import Shell from '@/Components/Shell'

interface Props {
  assets: { logo: string; banner: string; banner2: string }
  [key: string]: any
}

export default function NotFound() {
  const { assets } = usePage<Props>().props

  return (
    <Shell>
      <section className="space-y-8 lg:space-y-12">
        <div className="overflow-hidden rounded-2xl shadow-xl ring-1 ring-green/5">
          <img
            src={assets.banner}
            alt="404 — Sanjumanju missing page hero banner"
            className="w-full max-h-[320px] sm:max-h-[420px] lg:max-h-[520px] object-cover"
            sizes="(max-width: 412px) 100vw, (max-width: 1024px) 92vw, 1200px"
            loading="eager"
            decoding="async"
          />
        </div>

        <div className="text-center max-w-2xl mx-auto space-y-6">
          <p className="text-sm uppercase tracking-widest text-chilli font-semibold">Page Not Found</p>
          <h1 className="font-serif text-5xl sm:text-6xl lg:text-7xl font-bold text-green">404</h1>
          <p className="text-base sm:text-lg text-green/80 leading-relaxed">
            The page you are looking for has been moved, renamed, or never existed. Head back to our
            homepage, explore our pickles, or get in touch with the Sanjumanju family.
          </p>
          <div className="flex flex-col sm:flex-row gap-3 justify-center pt-2">
            <Link href="/" className="rounded-xl bg-green text-ivory font-semibold px-6 py-3 hover:bg-green/90 transition-colors shadow-md">
              Back to Home
            </Link>
            <Link href="/pickles" className="rounded-xl border border-green/20 text-green font-semibold px-6 py-3 hover:bg-turmeric/10 transition-colors">
              Browse Pickles
            </Link>
          </div>
        </div>

        <div className="overflow-hidden rounded-xl shadow-lg">
          <img
            src={assets.banner2}
            alt="404 — Sanjumanju missing page featured banner"
            className="w-full max-h-[180px] sm:max-h-[220px] lg:max-h-[240px] object-cover"
            sizes="(max-width: 412px) 100vw, 960px"
            loading="lazy"
            decoding="async"
          />
        </div>
      </section>
    </Shell>
  )
}

