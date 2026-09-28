import { Link, usePage } from '@inertiajs/react'

export interface SharedPageProps {
  assets: {
    logo: string
    banner: string
    banner2: string
  }
  appName: string
  [key: string]: any
}

export default function Shell({ children }: { children: React.ReactNode }) {
  const { url, props } = usePage<SharedPageProps>()
  const { assets, appName } = props

  const navLinks = [
    { href: '/', label: 'Home', always: true },
    { href: '/our-story', label: 'Our Story', hideBelow: 'sm' },
    { href: '/pickles', label: 'Pickles', always: true },
    { href: '/our-process', label: 'Process', hideBelow: 'md' },
    { href: '/gifting', label: 'Gifting', hideBelow: 'lg' },
    { href: '/contact', label: 'Contact', always: true, cta: true },
  ]

  return (
    <div className="min-h-screen flex flex-col bg-ivory text-green">
      <header className="sticky top-0 z-40 bg-ivory/95 backdrop-blur border-b border-turmeric/20 shadow-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between">
          <Link href="/" className="flex items-center gap-3 group" aria-label={`${appName || 'Sanjumanju'} home`}>
            <img
              src={assets.logo}
              alt={`${appName || 'Sanjumanju'} Logo`}
              className="h-10 xs:h-11 sm:h-12 w-auto object-contain rounded-full ring-2 ring-turmeric/40 group-hover:ring-turmeric/70 transition-all shadow-sm group-hover:scale-[1.03] duration-200"
              loading="eager"
              decoding="async"
              width={48}
              height={48}
            />
            <span className="font-serif text-xl xs:text-2xl font-bold text-green tracking-wide hidden xs:block">
              {appName || 'Sanjumanju'}
            </span>
          </Link>

          <nav className="flex items-center gap-0.5 xs:gap-1 md:gap-2 lg:gap-4 text-sm lg:text-base" aria-label="Primary">
            {navLinks.map((link) => {
              const isActive = url === link.href || (link.href !== '/' && url.startsWith(link.href))
              const baseCls =
                'px-2.5 sm:px-3.5 py-2 rounded-xl text-sm font-medium transition-all duration-150'
              const visCls = link.always
                ? ''
                : link.hideBelow === 'sm'
                  ? 'hidden sm:block'
                  : link.hideBelow === 'md'
                    ? 'hidden md:block'
                    : 'hidden lg:block'
              
              let styleCls = 'hover:bg-turmeric/10 text-green/80 hover:text-green'
              if (link.cta) {
                styleCls = isActive
                  ? 'bg-green text-ivory ring-2 ring-turmeric/50 ml-1 xs:ml-2 shadow-sm'
                  : 'bg-green text-ivory hover:bg-green/90 ml-1 xs:ml-2 shadow-sm hover:shadow'
              } else if (isActive) {
                styleCls = 'bg-turmeric/20 text-green font-semibold ring-1 ring-turmeric/30'
              }

              return (
                <Link key={link.href} href={link.href} className={`${baseCls} ${visCls} ${styleCls}`}>
                  {link.label}
                </Link>
              )
            })}
          </nav>
        </div>
      </header>

      <main className="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 xs:py-8 lg:py-12">
        {children}
      </main>

      <footer className="border-t border-turmeric/20 bg-ivory/80 mt-auto">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col sm:flex-row items-center justify-between gap-6">
          <div className="flex items-center gap-3.5">
            <img
              src={assets.logo}
              alt=""
              aria-hidden="true"
              className="w-10 h-10 object-contain rounded-full ring-1 ring-turmeric/30"
              loading="lazy"
              decoding="async"
            />
            <div className="text-xs sm:text-sm text-green/70 leading-snug">
              <p className="font-semibold text-green text-base font-serif">{appName || 'Sanjumanju'}</p>
              <p>Handcrafted Traditional South Indian Pickles &amp; Spices</p>
            </div>
          </div>
          <div className="flex flex-wrap justify-center gap-x-6 gap-y-2 text-xs sm:text-sm font-medium text-green/70">
            <Link href="/legal/privacy" className="hover:text-green transition-colors">Privacy Policy</Link>
            <Link href="/legal/terms" className="hover:text-green transition-colors">Terms of Service</Link>
            <Link href="/legal/shipping-policy" className="hover:text-green transition-colors">Shipping Policy</Link>
            <Link href="/legal" className="hover:text-green transition-colors">Legal Overview</Link>
            <Link href="/contact" className="hover:text-green transition-colors">Contact</Link>
          </div>
        </div>
      </footer>
    </div>
  )
}

